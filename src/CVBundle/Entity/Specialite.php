<?php

namespace CVBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Specialite
 *
 * @ORM\Table(name="specialite")
 * @ORM\Entity(repositoryClass="CVBundle\Repository\SpecialiteRepository")
 */
class Specialite
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
     * @ORM\Column(name="specialiteName", type="string", length=255, unique=true)
     */
    private $specialiteName;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=255)
     */
    private $description;


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
     * Set specialiteName
     *
     * @param string $specialiteName
     *
     * @return Specialite
     */
    public function setSpecialiteName($specialiteName)
    {
        $this->specialiteName = $specialiteName;

        return $this;
    }

    /**
     * Get specialiteName
     *
     * @return string
     */
    public function getSpecialiteName()
    {
        return $this->specialiteName;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Specialite
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }
}

