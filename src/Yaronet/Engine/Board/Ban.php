<?php

namespace App\Yaronet\Engine\Board;

use App\Entity\BoardBan;
use App\Entity\BoardForum;
use Doctrine\ORM\EntityManagerInterface;

class Ban
{
    private $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    /**
     * @param BoardForum $forum
     * @param array $newAddresses
     */
    public function update(BoardForum $forum, string $addresses): void
    {
        $newAddresses = \array_filter(
            \array_map('trim',
                \explode(',', $addresses, BoardBan::COUNT_MAX
                )));

        $bannedAddresses = $this->entityManager
            ->getRepository(BoardBan::class)
            ->findBy(array(
                'forum' => $forum->getId(),
            ));
        $oldAddresses = array();

        foreach ($bannedAddresses as $bannedAddress) {
            if (!\in_array($bannedAddress->getAddress(), $newAddresses, false)) {
                $this->entityManager->remove($bannedAddress);
            } else {
                $oldAddresses[] = $bannedAddress->getAddress();
            }
        }

        $toAdd = \array_diff($newAddresses, $oldAddresses);

        foreach ($toAdd as $address) {
            $ban = new BoardBan();
            $ban->setForum($forum);
            $ban->setAddress(\trim($address));
            $this->entityManager->persist($ban);
        }

        $this->entityManager->flush();
    }
}