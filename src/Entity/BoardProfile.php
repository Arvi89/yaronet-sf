<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * BoardProfile
 *
 * @ORM\Table(name="board_profile")
 * @ORM\Entity
 */
class BoardProfile
{
    /**
     * @var int
     *
     * @ORM\Id
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @var AccountUser
     *
     * @ORM\OneToOne(targetEntity="App\Entity\AccountUser", inversedBy="profile")
     */
    private $user;

    /**
     * @var int|null
     *
     * @ORM\Column(name="forum", type="integer", nullable=true, options={"unsigned"=true})
     */
    private $forum;

    /**
     * @var bool
     *
     * @ORM\Column(name="gender", type="boolean", nullable=false)
     */
    private $gender;

    /**
     * @var string
     *
     * @ORM\Column(name="signature", type="string", length=1024, nullable=false)
     */
    private $signature;

    /**
     * @var bool
     *
     * @ORM\Column(name="avatar", type="boolean", nullable=false)
     */
    private $avatar;

    /**
     * @var int
     *
     * @ORM\Column(name="avatar_tag", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $avatarTag;

    /**
     * @var BoardPermissionForum
     *
     * @ORM\OneToMany(targetEntity="App\Entity\BoardPermissionForum", mappedBy="profile")
     */
    private $permissions;

    public function __construct()
    {
        $this->permissions = new ArrayCollection();
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getUser(): ?AccountUser
    {
        return $this->user;
    }

    public function getForum(): ?int
    {
        return $this->forum;
    }

    public function setForum(?int $forum): self
    {
        $this->forum = $forum;

        return $this;
    }

    public function getGender(): ?bool
    {
        return $this->gender;
    }

    public function setGender(bool $gender): self
    {
        $this->gender = $gender;

        return $this;
    }

    public function getSignature(): ?string
    {
        return $this->signature;
    }

    public function setSignature(string $signature): self
    {
        $this->signature = $signature;

        return $this;
    }

    public function getAvatar(): ?bool
    {
        return $this->avatar;
    }

    public function setAvatar(bool $avatar): self
    {
        $this->avatar = $avatar;

        return $this;
    }

    public function getAvatarTag(): ?int
    {
        return $this->avatarTag;
    }

    public function setAvatarTag(int $avatarTag): self
    {
        $this->avatarTag = $avatarTag;

        return $this;
    }

    public function getPermissions(): Collection
    {
        return $this->permissions;
    }

    public function setUser(?AccountUser $user): self
    {
        $this->user = $user;

        return $this;
    }


}
