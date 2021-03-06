<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * BoardPermissionTopic
 *
 * @ORM\Table(name="board_permission_topic")
 * @ORM\Entity
 */
class BoardPermissionTopic
{
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
     * @ORM\Column(name="profile", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
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

    public function getTopic(): ?int
    {
        return $this->topic;
    }

    public function getProfile(): ?int
    {
        return $this->profile;
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
