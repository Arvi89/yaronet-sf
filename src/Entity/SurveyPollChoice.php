<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SurveyPollChoice
 *
 * @ORM\Table(name="survey_poll_choice")
 * @ORM\Entity
 */
class SurveyPollChoice
{
    /**
     * @var int
     *
     * @ORM\Column(name="poll", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $poll;

    /**
     * @var int
     *
     * @ORM\Column(name="rank", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $rank;

    /**
     * @var string
     *
     * @ORM\Column(name="text", type="string", length=512, nullable=false)
     */
    private $text;

    /**
     * @var int
     *
     * @ORM\Column(name="score", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $score;

    public function getPoll(): ?int
    {
        return $this->poll;
    }

    public function getRank(): ?int
    {
        return $this->rank;
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

    public function getScore(): ?int
    {
        return $this->score;
    }

    public function setScore(int $score): self
    {
        $this->score = $score;

        return $this;
    }


}
