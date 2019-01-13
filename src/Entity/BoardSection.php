<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * BoardSection
 *
 * @ORM\Table(name="board_section")
 * @ORM\Entity
 */
class BoardSection
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
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=128, nullable=false)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=256, nullable=false)
     */
    private $description;

    /**
     * @var string|null
     *
     * @ORM\Column(name="header", type="text", length=65535, nullable=true)
     */
    private $header;

    /**
     * @var bool
     *
     * @ORM\Column(name="access", type="boolean", nullable=false)
     */
    private $access;

    /**
     * @var bool
     *
     * @ORM\Column(name="reach", type="boolean", nullable=false)
     */
    private $reach;

    /**
     * @var bool
     *
     * @ORM\Column(name="is_delegated", type="boolean", nullable=false)
     */
    private $isDelegated;

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

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getHeader(): ?string
    {
        return $this->header;
    }

    public function setHeader(?string $header): self
    {
        $this->header = $header;

        return $this;
    }

    public function getAccess(): ?bool
    {
        return $this->access;
    }

    public function setAccess(bool $access): self
    {
        $this->access = $access;

        return $this;
    }

    public function getReach(): ?bool
    {
        return $this->reach;
    }

    public function setReach(bool $reach): self
    {
        $this->reach = $reach;

        return $this;
    }

    public function getIsDelegated(): ?bool
    {
        return $this->isDelegated;
    }

    public function setIsDelegated(bool $isDelegated): self
    {
        $this->isDelegated = $isDelegated;

        return $this;
    }


}
