<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AccountMessageCopy
 *
 * @ORM\Table(name="account_message_copy")
 * @ORM\Entity
 */
class AccountMessageCopy
{
    /**
     * @var int
     *
     * @ORM\Column(name="message", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $message;

    /**
     * @var int
     *
     * @ORM\Column(name="recipient", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $recipient;

    /**
     * @var bool
     *
     * @ORM\Column(name="hidden", type="boolean", nullable=false)
     */
    private $hidden;

    /**
     * @var bool
     *
     * @ORM\Column(name="seen", type="boolean", nullable=false)
     */
    private $seen;

    public function getMessage(): ?int
    {
        return $this->message;
    }

    public function getRecipient(): ?int
    {
        return $this->recipient;
    }

    public function getHidden(): ?bool
    {
        return $this->hidden;
    }

    public function setHidden(bool $hidden): self
    {
        $this->hidden = $hidden;

        return $this;
    }

    public function getSeen(): ?bool
    {
        return $this->seen;
    }

    public function setSeen(bool $seen): self
    {
        $this->seen = $seen;

        return $this;
    }


}
