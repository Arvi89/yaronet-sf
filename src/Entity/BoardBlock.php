<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * BoardBlock
 *
 * @ORM\Table(name="board_block")
 * @ORM\Entity
 */
class BoardBlock
{
    /**
     * @var int
     *
     * @ORM\Column(name="forum", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $forum;

    /**
     * @var int
     *
     * @ORM\Column(name="rank", type="smallint", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $rank;

    /**
     * @var int|null
     *
     * @ORM\Column(name="section", type="integer", nullable=true, options={"unsigned"=true})
     */
    private $section;

    /**
     * @var string|null
     *
     * @ORM\Column(name="text", type="text", length=65535, nullable=true)
     */
    private $text;

    public function getForum(): ?int
    {
        return $this->forum;
    }

    public function getRank(): ?int
    {
        return $this->rank;
    }

    public function getSection(): ?int
    {
        return $this->section;
    }

    public function setSection(?int $section): self
    {
        $this->section = $section;

        return $this;
    }

    public function getText(): ?string
    {
        return $this->text;
    }

    public function setText(?string $text): self
    {
        $this->text = $text;

        return $this;
    }


}
