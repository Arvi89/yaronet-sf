<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SurveyPollVote
 *
 * @ORM\Table(name="survey_poll_vote")
 * @ORM\Entity
 */
class SurveyPollVote
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
     * @ORM\Column(name="user", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $user;

    public function getPoll(): ?int
    {
        return $this->poll;
    }

    public function getUser(): ?int
    {
        return $this->user;
    }


}
