<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * BoardSearchResult
 *
 * @ORM\Table(name="board_search_result")
 * @ORM\Entity
 */
class BoardSearchResult
{
    /**
     * @var int
     *
     * @ORM\Column(name="search", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $search;

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
     * @ORM\Column(name="topic", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $topic;

    public function getSearch(): ?int
    {
        return $this->search;
    }

    public function getPosition(): ?int
    {
        return $this->position;
    }

    public function getTopic(): ?int
    {
        return $this->topic;
    }


}
