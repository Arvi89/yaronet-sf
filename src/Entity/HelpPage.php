<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * HelpPage
 *
 * @ORM\Table(name="help_page")
 * @ORM\Entity
 */
class HelpPage
{
    /**
     * @var string
     *
     * @ORM\Column(name="label", type="string", length=32, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $label;

    /**
     * @var string
     *
     * @ORM\Column(name="language", type="string", length=8, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $language;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=256, nullable=false)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="text", type="text", length=65535, nullable=false)
     */
    private $text;

    public function getLabel(): ?string
    {
        return $this->label;
    }

    public function getLanguage(): ?string
    {
        return $this->language;
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

    public function getText(): ?string
    {
        return $this->text;
    }

    public function setText(string $text): self
    {
        $this->text = $text;

        return $this;
    }


}
