<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * BoardPostIndex
 *
 * @ORM\Table(name="board_post_index")
 * @ORM\Entity
 */
class BoardPostIndex
{
    /**
     * @var int
     *
     * @ORM\Column(name="post", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $post;

    /**
     * @var int
     *
     * @ORM\Column(name="create_profile", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $createProfile = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="text", type="text", length=65535, nullable=false)
     */
    private $text;

    public function getPost(): ?int
    {
        return $this->post;
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
