<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * BoardSectionRead
 *
 * @ORM\Table(name="board_section_read")
 * @ORM\Entity
 */
class BoardSectionRead
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
     * @ORM\Column(name="section", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $section;

    public function getProfile(): ?int
    {
        return $this->profile;
    }

    public function getSection(): ?int
    {
        return $this->section;
    }


}
