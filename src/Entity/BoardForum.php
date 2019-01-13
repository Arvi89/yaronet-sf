<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\Collection;

/**
 * BoardForum
 *
 * @ORM\Table(name="board_forum", uniqueConstraints={@ORM\UniqueConstraint(name="alias", columns={"alias"}), @ORM\UniqueConstraint(name="name", columns={"name"})})
 * @ORM\Entity
 */
class BoardForum
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
     * @ORM\Column(name="alias", type="string", length=32, nullable=true)
     */
    private $alias;

    /**
     * @var string|null
     *
     * @ORM\Column(name="header", type="text", length=65535, nullable=true)
     */
    private $header;

    /**
     * @var string|null
     *
     * @ORM\Column(name="preface", type="text", length=65535, nullable=true)
     */
    private $preface;

    /**
     * @var string|null
     *
     * @ORM\Column(name="template", type="string", length=32, nullable=true)
     */
    private $template;

    /**
     * @var int
     *
     * @ORM\Column(name="icon_tag", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $iconTag;

    /**
     * @var bool
     *
     * @ORM\Column(name="is_hidden", type="boolean", nullable=false)
     */
    private $isHidden;

    /**
     * @var bool
     *
     * @ORM\Column(name="is_illustrated", type="boolean", nullable=false)
     */
    private $isIllustrated;

    /**
     * @var BoardPermissionForum
     *
     * @ORM\OneToMany(targetEntity="App\Entity\BoardPermissionForum", mappedBy="forum")
     */
    private $permissions;

    /**
     * @var BoardBan
     *
     * @ORM\OneToMany(targetEntity="App\Entity\BoardBan", mappedBy="forum")
     */
    private $bans;

    public function __construct()
    {
        $this->permissions = new ArrayCollection();
        $this->bans = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
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

    public function getAlias(): ?string
    {
        return $this->alias;
    }

    public function setAlias(?string $alias): self
    {
        $this->alias = $alias;

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

    public function getPreface(): ?string
    {
        return $this->preface;
    }

    public function setPreface(?string $preface): self
    {
        $this->preface = $preface;

        return $this;
    }

    public function getTemplate(): ?string
    {
        return $this->template;
    }

    public function setTemplate(?string $template): self
    {
        $this->template = $template;

        return $this;
    }

    public function getIconTag(): ?int
    {
        return $this->iconTag;
    }

    public function setIconTag(int $iconTag): self
    {
        $this->iconTag = $iconTag;

        return $this;
    }

    public function getIsHidden(): ?bool
    {
        return $this->isHidden;
    }

    public function setIsHidden(bool $isHidden): self
    {
        $this->isHidden = $isHidden;

        return $this;
    }

    public function getIsIllustrated(): ?bool
    {
        return $this->isIllustrated;
    }

    public function setIsIllustrated(bool $isIllustrated): self
    {
        $this->isIllustrated = $isIllustrated;

        return $this;
    }

    public function getPermissions(): Collection
    {
        return $this->permissions;
    }

    public function getBans(): Collection
    {
        return $this->bans;
    }

    public function addPermission(BoardPermissionForum $permission): self
    {
        if (!$this->permissions->contains($permission)) {
            $this->permissions[] = $permission;
            $permission->setForum($this);
        }

        return $this;
    }

    public function removePermission(BoardPermissionForum $permission): self
    {
        if ($this->permissions->contains($permission)) {
            $this->permissions->removeElement($permission);
            // set the owning side to null (unless already changed)
            if ($permission->getForum() === $this) {
                $permission->setForum(null);
            }
        }

        return $this;
    }

    public function addBan(BoardBan $ban): self
    {
        if (!$this->bans->contains($ban)) {
            $this->bans[] = $ban;
            $ban->setForum($this);
        }

        return $this;
    }

    public function removeBan(BoardBan $ban): self
    {
        if ($this->bans->contains($ban)) {
            $this->bans->removeElement($ban);
            // set the owning side to null (unless already changed)
            if ($ban->getForum() === $this) {
                $ban->setForum(null);
            }
        }

        return $this;
    }


}
