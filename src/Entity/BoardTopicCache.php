<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * BoardTopicCache
 *
 * @ORM\Table(name="board_topic_cache")
 * @ORM\Entity
 */
class BoardTopicCache
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
     * @var int|null
     *
     * @ORM\Column(name="create_profile", type="integer", nullable=true, options={"unsigned"=true})
     */
    private $createProfile;

    /**
     * @var int|null
     *
     * @ORM\Column(name="create_time", type="integer", nullable=true, options={"unsigned"=true})
     */
    private $createTime;

    /**
     * @var int|null
     *
     * @ORM\Column(name="last_profile", type="integer", nullable=true, options={"unsigned"=true})
     */
    private $lastProfile;

    /**
     * @var int
     *
     * @ORM\Column(name="posts", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $posts;

    /**
     * @var string|null
     *
     * @ORM\Column(name="hint", type="string", length=500, nullable=true)
     */
    private $hint;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCreateProfile(): ?int
    {
        return $this->createProfile;
    }

    public function setCreateProfile(?int $createProfile): self
    {
        $this->createProfile = $createProfile;

        return $this;
    }

    public function getCreateTime(): ?int
    {
        return $this->createTime;
    }

    public function setCreateTime(?int $createTime): self
    {
        $this->createTime = $createTime;

        return $this;
    }

    public function getLastProfile(): ?int
    {
        return $this->lastProfile;
    }

    public function setLastProfile(?int $lastProfile): self
    {
        $this->lastProfile = $lastProfile;

        return $this;
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

    public function getHint(): ?string
    {
        return $this->hint;
    }

    public function setHint(?string $hint): self
    {
        $this->hint = $hint;

        return $this;
    }


}
