<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * BoardLog
 *
 * @ORM\Table(name="board_log")
 * @ORM\Entity
 */
class BoardLog
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
     * @ORM\Column(name="forum", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $forum;

    /**
     * @var int
     *
     * @ORM\Column(name="time", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $time;

    /**
     * @var int
     *
     * @ORM\Column(name="profile", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $profile;

    /**
     * @var string
     *
     * @ORM\Column(name="address", type="string", length=64, nullable=false)
     */
    private $address;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=32, nullable=false)
     */
    private $type;

    /**
     * @var string
     *
     * @ORM\Column(name="data", type="text", length=65535, nullable=false)
     */
    private $data;

    public function getId(): ?int
    {
        return $this->id;
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

    public function getTime(): ?int
    {
        return $this->time;
    }

    public function setTime(int $time): self
    {
        $this->time = $time;

        return $this;
    }

    public function getProfile(): ?int
    {
        return $this->profile;
    }

    public function setProfile(int $profile): self
    {
        $this->profile = $profile;

        return $this;
    }

    public function getAddress(): ?string
    {
        return $this->address;
    }

    public function setAddress(string $address): self
    {
        $this->address = $address;

        return $this;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(string $type): self
    {
        $this->type = $type;

        return $this;
    }

    public function getData(): ?string
    {
        return $this->data;
    }

    public function setData(string $data): self
    {
        $this->data = $data;

        return $this;
    }


}
