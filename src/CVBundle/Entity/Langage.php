<?php

namespace CVBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Langage
 *
 * @ORM\Table(name="Langage")
 * @ORM\Entity(repositoryClass="CVBundle\Repository\LangageRepository")
 */
class Langage
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
     * @ORM\Column(name="langageName", type="string", length=255, unique=true)
     */
    private $langageName;

    /**
     * @var int
     *
     * @ORM\Column(name="niveau", type="integer")
     */
    private $niveau;


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
     * Set langageName
     *
     * @param string $langageName
     *
     * @return angage
     */
    public function setLangageName($langageName)
    {
        $this->langageName = $langageName;

        return $this;
    }

    /**
     * Get langageName
     *
     * @return string
     */
    public function getLangageName()
    {
        return $this->langageName;
    }

    /**
     * Set niveau
     *
     * @param integer $niveau
     *
     * @return angage
     */
    public function setNiveau($niveau)
    {
        $this->niveau = $niveau;

        return $this;
    }

    /**
     * Get niveau
     *
     * @return int
     */
    public function getNiveau()
    {
        return $this->niveau;
    }
}

