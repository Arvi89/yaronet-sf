<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * BoardBan
 *
 * @ORM\Table(name="board_ban")
 * @ORM\Entity
 */
class BoardBan
{
    const COUNT_MAX = 100;

    /**
     * @var BoardForum
     *
     * @ORM\Id
     * @ORM\ManyToOne(targetEntity="App\Entity\BoardForum", inversedBy="bans")
     */
    private $forum;

    /**
     * @var string
     *
     * @ORM\Id
     * @ORM\Column(name="address", type="string", length=40, nullable=false)
     */
    private $address;

    public function getForum(): ?BoardForum
    {
        return $this->forum;
    }

    public function setForum(BoardForum $forum): BoardBan
    {
        $this->forum = $forum;

        return $this;
    }

    public function getAddress(): ?string
    {
        return $this->address;
    }

    public function setAddress(string $address): BoardBan
    {
        $this->address = $address;

        return $this;
    }


}
