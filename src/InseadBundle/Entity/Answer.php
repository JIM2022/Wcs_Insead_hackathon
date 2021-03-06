<?php

namespace InseadBundle\Entity;

/**
 * Answer
 */
class Answer
{
    /**
     * @var int
     */
    private $id;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $questions;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->questions = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add question
     *
     * @param \InseadBundle\Entity\Questions $question
     *
     * @return Answer
     */
    public function addQuestion(\InseadBundle\Entity\Questions $question)
    {
        $this->questions[] = $question;

        return $this;
    }

    /**
     * Remove question
     *
     * @param \InseadBundle\Entity\Questions $question
     */
    public function removeQuestion(\InseadBundle\Entity\Questions $question)
    {
        $this->questions->removeElement($question);
    }

    /**
     * Get questions
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getQuestions()
    {
        return $this->questions;
    }
    /**
     * @var \InseadBundle\Entity\Choices
     */
    private $choices;


    /**
     * Set choices
     *
     * @param \InseadBundle\Entity\Choices $choices
     *
     * @return Answer
     */
    public function setChoices(\InseadBundle\Entity\Choices $choices = null)
    {
        $this->choices = $choices;

        return $this;
    }

    /**
     * Get choices
     *
     * @return \InseadBundle\Entity\Choices
     */
    public function getChoices()
    {
        return $this->choices;
    }
}
