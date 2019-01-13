<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * BoardTopic
 *
 * @ORM\Table(name="board_topic")
 * @ORM\Entity
 */
class BoardTopic
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var int
     *
     * @ORM\Column(name="section", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $section;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=256, nullable=false)
     */
    private $name;

    /**
     * @var int
     *
     * @ORM\Column(name="last_time", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $lastTime;

    /**
     * @var bool
     *
     * @ORM\Column(name="weight", type="boolean", nullable=false)
     */
    private $weight;

    /**
     * @var bool
     *
     * @ORM\Column(name="is_closed", type="boolean", nullable=false)
     */
    private $isClosed;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getSection(): ?int
    {
        return $this->section;
    }

    public function setSection(int $section): self
    {
        $this->section = $section;

        return $this;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getLastTime(): ?int
    {
        return $this->lastTime;
    }

    public function setLastTime(int $lastTime): self
    {
        $this->lastTime = $lastTime;

        return $this;
    }

    public function getWeight(): ?bool
    {
        return $this->weight;
    }

    public function setWeight(bool $weight): self
    {
        $this->weight = $weight;

        return $this;
    }

    public function getIsClosed(): ?bool
    {
        return $this->isClosed;
    }

    public function setIsClosed(bool $isClosed): self
    {
        $this->isClosed = $isClosed;

        return $this;
    }


}
