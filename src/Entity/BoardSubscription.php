<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * BoardSubscription
 *
 * @ORM\Table(name="board_subscription")
 * @ORM\Entity
 */
class BoardSubscription
{
    /**
     * @var int
     *
     * @ORM\Column(name="section", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $section;

    /**
     * @var int
     *
     * @ORM\Column(name="profile", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $profile;

    public function getSection(): ?int
    {
        return $this->section;
    }

    public function getProfile(): ?int
    {
        return $this->profile;
    }


}
