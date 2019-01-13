<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * BoardReference
 *
 * @ORM\Table(name="board_reference")
 * @ORM\Entity
 */
class BoardReference
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
     * @ORM\Column(name="position", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $position;

    /**
     * @var int
     *
     * @ORM\Column(name="post", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $post;

    public function getTopic(): ?int
    {
        return $this->topic;
    }

    public function getPosition(): ?int
    {
        return $this->position;
    }

    public function getPost(): ?int
    {
        return $this->post;
    }

    public function setPost(int $post): self
    {
        $this->post = $post;

        return $this;
    }


}
