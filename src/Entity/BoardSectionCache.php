<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * BoardSectionCache
 *
 * @ORM\Table(name="board_section_cache")
 * @ORM\Entity
 */
class BoardSectionCache
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
     * @ORM\Column(name="last_topic", type="integer", nullable=true, options={"unsigned"=true})
     */
    private $lastTopic;

    /**
     * @var int
     *
     * @ORM\Column(name="topics", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $topics;

    /**
     * @var string|null
     *
     * @ORM\Column(name="hint", type="string", length=100, nullable=true)
     */
    private $hint;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLastTopic(): ?int
    {
        return $this->lastTopic;
    }

    public function setLastTopic(?int $lastTopic): self
    {
        $this->lastTopic = $lastTopic;

        return $this;
    }

    public function getTopics(): ?int
    {
        return $this->topics;
    }

    public function setTopics(int $topics): self
    {
        $this->topics = $topics;

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
