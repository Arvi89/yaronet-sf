<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * BoardSearch
 *
 * @ORM\Table(name="board_search")
 * @ORM\Entity
 */
class BoardSearch
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
     * @var int
     *
     * @ORM\Column(name="forum", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $forum;

    /**
     * @var int
     *
     * @ORM\Column(name="profile", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $profile;

    /**
     * @var string
     *
     * @ORM\Column(name="query", type="string", length=200, nullable=false)
     */
    private $query;

    /**
     * @var int
     *
     * @ORM\Column(name="time", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $time;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getForum(): ?int
    {
        return $this->forum;
    }

    public function setForum(int $forum): self
    {
        $this->forum = $forum;

        return $this;
    }

    public function getProfile(): ?int
    {
        return $this->profile;
    }

    public function setProfile(int $profile): self
    {
        $this->profile = $profile;

        return $this;
    }

    public function getQuery(): ?string
    {
        return $this->query;
    }

    public function setQuery(string $query): self
    {
        $this->query = $query;

        return $this;
    }

    public function getTime(): ?int
    {
        return $this->time;
    }

    public function setTime(int $time): self
    {
        $this->time = $time;

        return $this;
    }


}
