<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * BoardFavorite
 *
 * @ORM\Table(name="board_favorite", uniqueConstraints={@ORM\UniqueConstraint(name="profile_order_forum", columns={"profile", "rank", "forum"})})
 * @ORM\Entity
 */
class BoardFavorite
{
    /**
     * @var int
     *
     * @ORM\Column(name="profile", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $profile;

    /**
     * @var int
     *
     * @ORM\Column(name="rank", type="smallint", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $rank;

    /**
     * @var int
     *
     * @ORM\Column(name="forum", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $forum;

    public function getProfile(): ?int
    {
        return $this->profile;
    }

    public function getRank(): ?int
    {
        return $this->rank;
    }

    public function getForum(): ?int
    {
        return $this->forum;
    }

    public function setForum(int $forum): self
    {
        $this->forum = $forum;

        return $this;
    }


}
