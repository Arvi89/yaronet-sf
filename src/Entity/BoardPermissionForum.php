<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * BoardPermissionForum
 *
 * @ORM\Table(name="board_permission_forum")
 * @ORM\Entity(repositoryClass="App\Repository\ForumPermissionRepository")
 */
class BoardPermissionForum
{
    /**
     * @var BoardForum
     *
     * @ORM\Id
     * @ORM\ManyToOne(targetEntity="App\Entity\BoardForum", inversedBy="permissions")
     */
    private $forum;

    /**
     * @var BoardProfile
     *
     * @ORM\Id
     * @ORM\ManyToOne(targetEntity="App\Entity\BoardProfile", inversedBy="permissions")
     */
    private $profile;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="can_change", type="boolean", nullable=true)
     */
    private $canChange;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="can_read", type="boolean", nullable=true)
     */
    private $canRead;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="can_write", type="boolean", nullable=true)
     */
    private $canWrite;

    /**
     * @var int
     *
     * @ORM\Column(name="expire", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $expire;

    public function getForum(): ?BoardForum
    {
        return $this->forum;
    }

    public function setForum(BoardForum $forum): self
    {
        $this->forum = $forum;

        return $this;
    }

    public function getProfile(): ?BoardProfile
    {
        return $this->profile;
    }

    public function setProfile(BoardProfile $profile): self
    {
        $this->profile = $profile;

        return $this;
    }

    public function getCanChange(): ?bool
    {
        return $this->canChange;
    }

    public function setCanChange(?bool $canChange): self
    {
        $this->canChange = $canChange;

        return $this;
    }

    public function getCanRead(): ?bool
    {
        return $this->canRead;
    }

    public function setCanRead(?bool $canRead): self
    {
        $this->canRead = $canRead;

        return $this;
    }

    public function getCanWrite(): ?bool
    {
        return $this->canWrite;
    }

    public function setCanWrite(?bool $canWrite): self
    {
        $this->canWrite = $canWrite;

        return $this;
    }

    public function getExpire(): ?int
    {
        return $this->expire;
    }

    public function setExpire(int $expire): self
    {
        $this->expire = $expire;

        return $this;
    }


}
