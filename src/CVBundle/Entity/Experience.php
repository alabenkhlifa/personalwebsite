<?php

namespace CVBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Experience
 *
 * @ORM\Table(name="experience")
 * @ORM\Entity(repositoryClass="CVBundle\Repository\ExperienceRepository")
 */
class Experience
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
     * @ORM\Column(name="experienceTitle", type="string", length=255)
     */
    private $experienceTitle;

    /**
     * @var string
     *
     * @ORM\Column(name="experienceDescription", type="string", length=255)
     */
    private $experienceDescription;

    /**
     * @var string
     *
     * @ORM\Column(name="experienceOrganisation", type="string", length=255)
     */
    private $experienceOrganisation;


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
     * Set experienceTitle
     *
     * @param string $experienceTitle
     *
     * @return Experience
     */
    public function setExperienceTitle($experienceTitle)
    {
        $this->experienceTitle = $experienceTitle;

        return $this;
    }

    /**
     * Get experienceTitle
     *
     * @return string
     */
    public function getExperienceTitle()
    {
        return $this->experienceTitle;
    }

    /**
     * Set experienceDescription
     *
     * @param string $experienceDescription
     *
     * @return Experience
     */
    public function setExperienceDescription($experienceDescription)
    {
        $this->experienceDescription = $experienceDescription;

        return $this;
    }

    /**
     * Get experienceDescription
     *
     * @return string
     */
    public function getExperienceDescription()
    {
        return $this->experienceDescription;
    }

    /**
     * Set experienceOrganisation
     *
     * @param string $experienceOrganisation
     *
     * @return Experience
     */
    public function setExperienceOrganisation($experienceOrganisation)
    {
        $this->experienceOrganisation = $experienceOrganisation;

        return $this;
    }

    /**
     * Get experienceOrganisation
     *
     * @return string
     */
    public function getExperienceOrganisation()
    {
        return $this->experienceOrganisation;
    }
}

