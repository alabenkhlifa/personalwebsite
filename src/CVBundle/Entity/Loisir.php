<?php

namespace CVBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Loisir
 *
 * @ORM\Table(name="loisir")
 * @ORM\Entity(repositoryClass="CVBundle\Repository\LoisirRepository")
 */
class Loisir
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
     * @ORM\Column(name="loisirName", type="string", length=255, unique=true)
     */
    private $loisirName;


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
     * Set loisirName
     *
     * @param string $loisirName
     *
     * @return Loisir
     */
    public function setLoisirName($loisirName)
    {
        $this->loisirName = $loisirName;

        return $this;
    }

    /**
     * Get loisirName
     *
     * @return string
     */
    public function getLoisirName()
    {
        return $this->loisirName;
    }
}

