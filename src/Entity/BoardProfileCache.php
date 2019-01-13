<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * BoardProfileCache
 *
 * @ORM\Table(name="board_profile_cache")
 * @ORM\Entity
 */
class BoardProfileCache
{
    /**
     * @var int
     *
     * @ORM\Column(name="user", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $user;

    /**
     * @var int
     *
     * @ORM\Column(name="posts", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $posts;

    public function getUser(): ?int
    {
        return $this->user;
    }

    public function getPosts(): ?int
    {
        return $this->posts;
    }

    public function setPosts(int $posts): self
    {
        $this->posts = $posts;

        return $this;
    }


}
