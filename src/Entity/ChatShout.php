<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ChatShout
 *
 * @ORM\Table(name="chat_shout")
 * @ORM\Entity
 */
class ChatShout
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
     * @var string
     *
     * @ORM\Column(name="nick", type="string", length=64, nullable=false)
     */
    private $nick;

    /**
     * @var int
     *
     * @ORM\Column(name="time", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $time;

    /**
     * @var bool
     *
     * @ORM\Column(name="is_guest", type="boolean", nullable=false)
     */
    private $isGuest;

    /**
     * @var string
     *
     * @ORM\Column(name="text", type="string", length=256, nullable=false)
     */
    private $text;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNick(): ?string
    {
        return $this->nick;
    }

    public function setNick(string $nick): self
    {
        $this->nick = $nick;

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

    public function getIsGuest(): ?bool
    {
        return $this->isGuest;
    }

    public function setIsGuest(bool $isGuest): self
    {
        $this->isGuest = $isGuest;

        return $this;
    }

    public function getText(): ?string
    {
        return $this->text;
    }

    public function setText(string $text): self
    {
        $this->text = $text;

        return $this;
    }


}
