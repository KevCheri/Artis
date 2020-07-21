<?php

namespace App\Entity;

use App\Repository\EntrepriseRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=EntrepriseRepository::class)
 */
class Entreprise
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nom;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $prenom;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $email;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $password;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nomMagasin;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $siret;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $denominationSocial;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $produitType;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $adresse;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $pays;

    /**
     * @ORM\Column(type="string", length=5)
     */
    private $codePostal;

    /**
     * @ORM\Column(type="object")
     */
    private $kbis;

    /**
     * @ORM\Column(type="object")
     */
    private $identite;

    /**
     * @ORM\Column(type="object")
     */
    private $rib;

    /**
     * @ORM\Column(type="object")
     */
    private $logo;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    public function setPrenom(string $prenom): self
    {
        $this->prenom = $prenom;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getPassword(): ?string
    {
        return $this->password;
    }

    public function setPassword(string $password): self
    {
        $this->password = $password;

        return $this;
    }

    public function getNomMagasin(): ?string
    {
        return $this->nomMagasin;
    }

    public function setNomMagasin(string $nomMagasin): self
    {
        $this->nomMagasin = $nomMagasin;

        return $this;
    }

    public function getSiret(): ?string
    {
        return $this->siret;
    }

    public function setSiret(string $siret): self
    {
        $this->siret = $siret;

        return $this;
    }

    public function getDenominationSocial(): ?string
    {
        return $this->denominationSocial;
    }

    public function setDenominationSocial(string $denominationSocial): self
    {
        $this->denominationSocial = $denominationSocial;

        return $this;
    }

    public function getProduitType(): ?string
    {
        return $this->produitType;
    }

    public function setProduitType(string $produitType): self
    {
        $this->produitType = $produitType;

        return $this;
    }

    public function getAdresse(): ?string
    {
        return $this->adresse;
    }

    public function setAdresse(string $adresse): self
    {
        $this->adresse = $adresse;

        return $this;
    }

    public function getPays(): ?string
    {
        return $this->pays;
    }

    public function setPays(string $pays): self
    {
        $this->pays = $pays;

        return $this;
    }

    public function getCodePostal(): ?string
    {
        return $this->codePostal;
    }

    public function setCodePostal(string $codePostal): self
    {
        $this->codePostal = $codePostal;

        return $this;
    }

    public function getKbis()
    {
        return $this->kbis;
    }

    public function setKbis($kbis): self
    {
        $this->kbis = $kbis;

        return $this;
    }

    public function getIdentite()
    {
        return $this->identite;
    }

    public function setIdentite($identite): self
    {
        $this->identite = $identite;

        return $this;
    }

    public function getRib()
    {
        return $this->rib;
    }

    public function setRIB($rib): self
    {
        $this->rib = $rib;

        return $this;
    }

    public function getLogo()
    {
        return $this->logo;
    }

    public function setLogo($logo): self
    {
        $this->logo = $logo;

        return $this;
    }
}
