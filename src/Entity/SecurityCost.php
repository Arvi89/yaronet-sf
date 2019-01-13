<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SecurityCost
 *
 * @ORM\Table(name="security_cost")
 * @ORM\Entity
 */
class SecurityCost
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
     * @var int
     *
     * @ORM\Column(name="active_amount", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $activeAmount;

    /**
     * @var int
     *
     * @ORM\Column(name="active_expire", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $activeExpire;

    /**
     * @var int
     *
     * @ORM\Column(name="decay_amount", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $decayAmount;

    public function getAddress(): ?string
    {
        return $this->address;
    }

    public function getActiveAmount(): ?int
    {
        return $this->activeAmount;
    }

    public function setActiveAmount(int $activeAmount): self
    {
        $this->activeAmount = $activeAmount;

        return $this;
    }

    public function getActiveExpire(): ?int
    {
        return $this->activeExpire;
    }

    public function setActiveExpire(int $activeExpire): self
    {
        $this->activeExpire = $activeExpire;

        return $this;
    }

    public function getDecayAmount(): ?int
    {
        return $this->decayAmount;
    }

    public function setDecayAmount(int $decayAmount): self
    {
        $this->decayAmount = $decayAmount;

        return $this;
    }


}
