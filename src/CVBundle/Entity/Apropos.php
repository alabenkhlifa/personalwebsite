<?php

namespace CVBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Apropos
 *
 * @ORM\Table(name="apropos")
 * @ORM\Entity(repositoryClass="CVBundle\Repository\AproposRepository")
 */
class Apropos
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
     * @ORM\Column(name="apropos", type="string", length=255)
     */
    private $apropos;


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
     * Set apropos
     *
     * @param string $apropos
     *
     * @return Apropos
     */
    public function setApropos($apropos)
    {
        $this->apropos = $apropos;

        return $this;
    }

    /**
     * Get apropos
     *
     * @return string
     */
    public function getApropos()
    {
        return $this->apropos;
    }
}

