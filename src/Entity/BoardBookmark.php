<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * BoardBookmark
 *
 * @ORM\Table(name="board_bookmark")
 * @ORM\Entity
 */
class BoardBookmark
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
     * @ORM\Column(name="topic", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $topic;

    /**
     * @var int
     *
     * @ORM\Column(name="position", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $position;

    /**
     * @var int
     *
     * @ORM\Column(name="time", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $time;

    /**
     * @var bool
     *
     * @ORM\Column(name="fresh", type="boolean", nullable=false)
     */
    private $fresh;

    /**
     * @var bool
     *
     * @ORM\Column(name="watch", type="boolean", nullable=false)
     */
    private $watch;

    public function getProfile(): ?int
    {
        return $this->profile;
    }

    public function getTopic(): ?int
    {
        return $this->topic;
    }

    public function getPosition(): ?int
    {
        return $this->position;
    }

    public function setPosition(int $position): self
    {
        $this->position = $position;

        return $this;
    }

    public function getTime(): ?int
    {
        return $this->time;
    }

    public function setTime(int $time): self
    {
        $this->time = $time;

        return $this;
    }

    public function getFresh(): ?bool
    {
        return $this->fresh;
    }

    public function setFresh(bool $fresh): self
    {
        $this->fresh = $fresh;

        return $this;
    }

    public function getWatch(): ?bool
    {
        return $this->watch;
    }

    public function setWatch(bool $watch): self
    {
        $this->watch = $watch;

        return $this;
    }


}
