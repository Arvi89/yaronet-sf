<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AccountActivity
 *
 * @ORM\Table(name="account_activity")
 * @ORM\Entity
 */
class AccountActivity
{
    /**
     * @var string
     *
     * @ORM\Column(name="address", type="string", length=40, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $address;

    /**
     * @var int|null
     *
     * @ORM\Column(name="user", type="integer", nullable=true, options={"unsigned"=true})
     */
    private $user;

    /**
     * @var string
     *
     * @ORM\Column(name="group", type="string", length=20, nullable=false)
     */
    private $group;

    /**
     * @var int
     *
     * @ORM\Column(name="create_time", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $createTime;

    /**
     * @var int
     *
     * @ORM\Column(name="pulse_time", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $pulseTime;

    /**
     * @var int
     *
     * @ORM\Column(name="expire_time", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $expireTime;

    /**
     * @var string
     *
     * @ORM\Column(name="location", type="string", length=50, nullable=false)
     */
    private $location;

    public function getAddress(): ?string
    {
        return $this->address;
    }

    public function getUser(): ?int
    {
        return $this->user;
    }

    public function setUser(?int $user): self
    {
        $this->user = $user;

        return $this;
    }

    public function getGroup(): ?string
    {
        return $this->group;
    }

    public function setGroup(string $group): self
    {
        $this->group = $group;

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

    public function getPulseTime(): ?int
    {
        return $this->pulseTime;
    }

    public function setPulseTime(int $pulseTime): self
    {
        $this->pulseTime = $pulseTime;

        return $this;
    }

    public function getExpireTime(): ?int
    {
        return $this->expireTime;
    }

    public function setExpireTime(int $expireTime): self
    {
        $this->expireTime = $expireTime;

        return $this;
    }

    public function getLocation(): ?string
    {
        return $this->location;
    }

    public function setLocation(string $location): self
    {
        $this->location = $location;

        return $this;
    }


}
