<?php

namespace AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * annonces
 *
 * @ORM\Table(name="annonces")
 * @ORM\Entity(repositoryClass="AdminBundle\Repository\annoncesRepository")
 */
class annonces
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
     * @ORM\Column(name="titres", type="string", length=255)
     */
    private $titres;

    /**
     * @var string
     *
     * @ORM\Column(name="images", type="string", length=255)
     */
    private $images;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=255)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="prix", type="string", length=255)
     */
    private $prix;

    /**
     * @var string
     *
     * @ORM\Column(name="vendeurs", type="string", length=255)
     */
    private $vendeurs;

    /**
     * @var string
     *
     * @ORM\Column(name="date", type="string", length=255)
     */
    private $date;

    /**
     * @var string
     *
     * @ORM\Column(name="telephone", type="string", length=255)
     */
    private $telephone;

    /**
     * @var string
     *
     * @ORM\Column(name="categorie", type="string", length=255)
     */
    private $categorie;

    /**
     * @var string
     *
     * @ORM\Column(name="localite", type="string", length=255)
     */
    private $localite;


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
     * Set titres
     *
     * @param string $titres
     *
     * @return annonces
     */
    public function setTitres($titres)
    {
        $this->titres = $titres;

        return $this;
    }

    /**
     * Get titres
     *
     * @return string
     */
    public function getTitres()
    {
        return $this->titres;
    }

    /**
     * Set images
     *
     * @param string $images
     *
     * @return annonces
     */
    public function setImages($images)
    {
        $this->images = $images;

        return $this;
    }

    /**
     * Get images
     *
     * @return string
     */
    public function getImages()
    {
        return $this->images;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return annonces
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

    /**
     * Set prix
     *
     * @param string $prix
     *
     * @return annonces
     */
    public function setPrix($prix)
    {
        $this->prix = $prix;

        return $this;
    }

    /**
     * Get prix
     *
     * @return string
     */
    public function getPrix()
    {
        return $this->prix;
    }

    /**
     * Set vendeurs
     *
     * @param string $vendeurs
     *
     * @return annonces
     */
    public function setVendeurs($vendeurs)
    {
        $this->vendeurs = $vendeurs;

        return $this;
    }

    /**
     * Get vendeurs
     *
     * @return string
     */
    public function getVendeurs()
    {
        return $this->vendeurs;
    }

    /**
     * Set date
     *
     * @param string $date
     *
     * @return annonces
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return string
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set telephone
     *
     * @param string $telephone
     *
     * @return annonces
     */
    public function setTelephone($telephone)
    {
        $this->telephone = $telephone;

        return $this;
    }

    /**
     * Get telephone
     *
     * @return string
     */
    public function getTelephone()
    {
        return $this->telephone;
    }

    /**
     * Set categorie
     *
     * @param string $categorie
     *
     * @return annonces
     */
    public function setCategorie($categorie)
    {
        $this->categorie = $categorie;

        return $this;
    }

    /**
     * Get categorie
     *
     * @return string
     */
    public function getCategorie()
    {
        return $this->categorie;
    }

    /**
     * Set localite
     *
     * @param string $localite
     *
     * @return annonces
     */
    public function setLocalite($localite)
    {
        $this->localite = $localite;

        return $this;
    }

    /**
     * Get localite
     *
     * @return string
     */
    public function getLocalite()
    {
        return $this->localite;
    }
}

