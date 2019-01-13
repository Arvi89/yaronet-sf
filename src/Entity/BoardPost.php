<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * BoardPost
 *
 * @ORM\Table(name="board_post")
 * @ORM\Entity
 */
class BoardPost
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
     * @ORM\Column(name="create_profile", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $createProfile;

    /**
     * @var int
     *
     * @ORM\Column(name="create_time", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $createTime;

    /**
     * @var int|null
     *
     * @ORM\Column(name="edit_profile", type="integer", nullable=true, options={"unsigned"=true})
     */
    private $editProfile;

    /**
     * @var int|null
     *
     * @ORM\Column(name="edit_time", type="integer", nullable=true, options={"unsigned"=true})
     */
    private $editTime;

    /**
     * @var string
     *
     * @ORM\Column(name="text", type="text", length=65535, nullable=false)
     */
    private $text;

    /**
     * @var string|null
     *
     * @ORM\Column(name="caution", type="string", length=256, nullable=true)
     */
    private $caution;

    /**
     * @var bool
     *
     * @ORM\Column(name="state", type="boolean", nullable=false)
     */
    private $state;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCreateProfile(): ?int
    {
        return $this->createProfile;
    }

    public function setCreateProfile(int $createProfile): self
    {
        $this->createProfile = $createProfile;

        return $this;
    }

    public function getCreateTime(): ?int
    {
        return $this->createTime;
    }

    public function setCreateTime(int $createTime): self
    {
        $this->createTime = $createTime;

        return $this;
    }

    public function getEditProfile(): ?int
    {
        return $this->editProfile;
    }

    public function setEditProfile(?int $editProfile): self
    {
        $this->editProfile = $editProfile;

        return $this;
    }

    public function getEditTime(): ?int
    {
        return $this->editTime;
    }

    public function setEditTime(?int $editTime): self
    {
        $this->editTime = $editTime;

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

    public function getCaution(): ?string
    {
        return $this->caution;
    }

    public function setCaution(?string $caution): self
    {
        $this->caution = $caution;

        return $this;
    }

    public function getState(): ?bool
    {
        return $this->state;
    }

    public function setState(bool $state): self
    {
        $this->state = $state;

        return $this;
    }


}
