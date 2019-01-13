<?php

namespace App\Repository;

use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;
use App\Entity\BoardPermissionForum;
use Doctrine\ORM\NonUniqueResultException;

class ForumPermissionRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, BoardPermissionForum::class);
    }

    /**
     * @param int $profileId
     * @param int $forumId
     * @return BoardPermissionForum|null
     */
    public function findWithProfileAndForum(int $profileId, int $forumId): ?BoardPermissionForum
    {
        $qb = $this->createQueryBuilder('perm')
            ->andWhere('perm.forum = :forumId')
            ->andWhere('perm.profile = :profileId')
            ->setMaxResults(1)
            ->setParameters(array(
                ':forumId' => $forumId,
                ':profileId' => $profileId,
            ))
            ->getQuery()
            ;

        try {
            return $qb->getOneOrNullResult();
        } catch (NonUniqueResultException $exception) {
            return null;
        }
    }
}