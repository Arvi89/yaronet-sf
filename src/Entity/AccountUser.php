<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AccountUser
 *
 * @ORM\Table(name="account_user")
 * @ORM\Entity
 */
class AccountUser
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
     * @ORM\Column(name="login", type="string", length=64, nullable=false)
     */
    private $login;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=128, nullable=false)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="mechanism", type="string", length=20, nullable=false)
     */
    private $mechanism;

    /**
     * @var string
     *
     * @ORM\Column(name="secret", type="string", length=200, nullable=false)
     */
    private $secret;

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
     * @ORM\Column(name="recover_time", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $recoverTime;

    /**
     * @var string
     *
     * @ORM\Column(name="language", type="string", length=5, nullable=false)
     */
    private $language;

    /**
     * @var string
     *
     * @ORM\Column(name="template", type="string", length=20, nullable=false)
     */
    private $template;

    /**
     * @var bool
     *
     * @ORM\Column(name="is_active", type="boolean", nullable=false)
     */
    private $isActive;

    /**
     * @var bool
     *
     * @ORM\Column(name="is_admin", type="boolean", nullable=false)
     */
    private $isAdmin;

    /**
     * @var bool
     *
     * @ORM\Column(name="is_disabled", type="boolean", nullable=false)
     */
    private $isDisabled;

    /**
     * @var bool
     *
     * @ORM\Column(name="is_favorite", type="boolean", nullable=false)
     */
    private $isFavorite;

    /**
     * @var bool
     *
     * @ORM\Column(name="is_uniform", type="boolean", nullable=false)
     */
    private $isUniform;

    /**
     * @var string
     *
     * @ORM\Column(name="options", type="string", length=600, nullable=false)
     */
    private $options;

    /**
     * @var BoardProfile
     *
     * @ORM\OneToOne(targetEntity="App\Entity\BoardProfile", mappedBy="user")
     */
    private $profile;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLogin(): ?string
    {
        return $this->login;
    }

    public function setLogin(string $login): self
    {
        $this->login = $login;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getMechanism(): ?string
    {
        return $this->mechanism;
    }

    public function setMechanism(string $mechanism): self
    {
        $this->mechanism = $mechanism;

        return $this;
    }

    public function getSecret(): ?string
    {
        return $this->secret;
    }

    public function setSecret(string $secret): self
    {
        $this->secret = $secret;

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

    public function getRecoverTime(): ?int
    {
        return $this->recoverTime;
    }

    public function setRecoverTime(int $recoverTime): self
    {
        $this->recoverTime = $recoverTime;

        return $this;
    }

    public function getLanguage(): ?string
    {
        return $this->language;
    }

    public function setLanguage(string $language): self
    {
        $this->language = $language;

        return $this;
    }

    public function getTemplate(): ?string
    {
        return $this->template;
    }

    public function setTemplate(string $template): self
    {
        $this->template = $template;

        return $this;
    }

    public function getIsActive(): ?bool
    {
        return $this->isActive;
    }

    public function setIsActive(bool $isActive): self
    {
        $this->isActive = $isActive;

        return $this;
    }

    public function getIsAdmin(): ?bool
    {
        return $this->isAdmin;
    }

    public function setIsAdmin(bool $isAdmin): self
    {
        $this->isAdmin = $isAdmin;

        return $this;
    }

    public function getIsDisabled(): ?bool
    {
        return $this->isDisabled;
    }

    public function setIsDisabled(bool $isDisabled): self
    {
        $this->isDisabled = $isDisabled;

        return $this;
    }

    public function getIsFavorite(): ?bool
    {
        return $this->isFavorite;
    }

    public function setIsFavorite(bool $isFavorite): self
    {
        $this->isFavorite = $isFavorite;

        return $this;
    }

    public function getIsUniform(): ?bool
    {
        return $this->isUniform;
    }

    public function setIsUniform(bool $isUniform): self
    {
        $this->isUniform = $isUniform;

        return $this;
    }

    public function getOptions(): ?string
    {
        return $this->options;
    }

    public function setOptions(string $options): self
    {
        $this->options = $options;

        return $this;
    }

    public function getProfile(): ?BoardProfile
    {
        return $this->profile;
    }

    public function setProfile(?BoardProfile $profile): self
    {
        $this->profile = $profile;

        // set (or unset) the owning side of the relation if necessary
        $newUser = $profile === null ? null : $this;
        if ($newUser !== $profile->getUser()) {
            $profile->setUser($newUser);
        }

        return $this;
    }


}
