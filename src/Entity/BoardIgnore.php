<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * BoardIgnore
 *
 * @ORM\Table(name="board_ignore")
 * @ORM\Entity
 */
class BoardIgnore
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
     * @ORM\Column(name="target", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $target;

    public function getProfile(): ?int
    {
        return $this->profile;
    }

    public function getTarget(): ?int
    {
        return $this->target;
    }


}
