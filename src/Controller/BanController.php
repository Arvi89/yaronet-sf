<?php

namespace App\Controller;

use App\Entity\BoardBan;
use App\Entity\BoardPermissionForum;
use App\Yaronet\Engine\Board\Ban;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\AccessDeniedHttpException;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;

class BanController extends AbstractController
{
    private $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    /**
     * @Route("/bans/{id}", name="getBanned",)
     * @param Request $request
     * @param Ban $ban
     * @param int $id
     * @return Response
     */
    public function banned(Request $request, Ban $ban, int $id): Response
    {
        $permission = $this->entityManager
            ->getRepository(BoardPermissionForum::class)
            ->findWithProfileAndForum($id, 1);

        if (!$permission) {
            throw new NotFoundHttpException("Forum doesn't exist");
        }

        if (!$permission->getCanRead()) {
            throw new AccessDeniedHttpException('Not allowed to read this forum');
        }

        if ($request->isMethod('POST')) {
            $ban->update($permission->getForum(), $request->request->get('addresses', ''));
        }

        $bannedAddresses = $this->entityManager
            ->getRepository(BoardBan::class)
            ->findBy(array(
                'forum' => $permission->getForum()->getId(),
            ));

        return new Response('templating_with_result');
    }
}