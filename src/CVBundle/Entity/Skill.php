<?php

namespace CVBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Skill
 *
 * @ORM\Table(name="skill")
 * @ORM\Entity(repositoryClass="CVBundle\Repository\SkillRepository")
 */
class Skill
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="skillName", type="string", length=255, unique=true)
     */
    private $skillName;

    /**
     * @var int
     *
     * @ORM\Column(name="pourcentage", type="integer")
     */
    private $pourcentage;


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
     * Set skillName
     *
     * @param string $skillName
     *
     * @return Skill
     */
    public function setSkillName($skillName)
    {
        $this->skillName = $skillName;

        return $this;
    }

    /**
     * Get skillName
     *
     * @return string
     */
    public function getSkillName()
    {
        return $this->skillName;
    }

    /**
     * Set pourcentage
     *
     * @param integer $pourcentage
     *
     * @return Skill
     */
    public function setPourcentage($pourcentage)
    {
        $this->pourcentage = $pourcentage;

        return $this;
    }

    /**
     * Get pourcentage
     *
     * @return int
     */
    public function getPourcentage()
    {
        return $this->pourcentage;
    }
}

