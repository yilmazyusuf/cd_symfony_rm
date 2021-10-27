<?php

namespace App\Entity;

use App\Repository\RetourenRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=RetourenRepository::class)
 */
class Retouren
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $kunden_nummer;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $lieferschein_auftragsnummer;

    /**
     * @ORM\Column(type="integer")
     */
    private $menge;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $bezeichnung;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $umtausch_grund;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $weitere_informationen;

    /**
     * @ORM\Column(type="smallint")
     */
    private $zahlungsart;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $ruckrufwunsch;

    /**
     * @ORM\Column(type="string", length=120, nullable=true)
     */
    private $email;

    /**
     * @ORM\Column(type="date")
     */
    private $erstellungsdatum;

    /**
     * @ORM\Column(type="date")
     */
    private $anderungsdatum;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getKundenNummer(): ?string
    {
        return $this->kunden_nummer;
    }

    public function setKundenNummer(string $kunden_nummer): self
    {
        $this->kunden_nummer = $kunden_nummer;

        return $this;
    }

    public function getLieferscheinAuftragsnummer(): ?string
    {
        return $this->lieferschein_auftragsnummer;
    }

    public function setLieferscheinAuftragsnummer(string $lieferschein_auftragsnummer): self
    {
        $this->lieferschein_auftragsnummer = $lieferschein_auftragsnummer;

        return $this;
    }

    public function getMenge(): ?int
    {
        return $this->menge;
    }

    public function setMenge(int $menge): self
    {
        $this->menge = $menge;

        return $this;
    }

    public function getBezeichnung(): ?string
    {
        return $this->bezeichnung;
    }

    public function setBezeichnung(?string $bezeichnung): self
    {
        $this->bezeichnung = $bezeichnung;

        return $this;
    }

    public function getUmtauschGrund(): ?string
    {
        return $this->umtausch_grund;
    }

    public function setUmtauschGrund(?string $umtausch_grund): self
    {
        $this->umtausch_grund = $umtausch_grund;

        return $this;
    }

    public function getWeitereInformationen(): ?string
    {
        return $this->weitere_informationen;
    }

    public function setWeitereInformationen(?string $weitere_informationen): self
    {
        $this->weitere_informationen = $weitere_informationen;

        return $this;
    }

    public function getZahlungsart(): ?int
    {
        return $this->zahlungsart;
    }

    public function setZahlungsart(int $zahlungsart): self
    {
        $this->zahlungsart = $zahlungsart;

        return $this;
    }

    public function getRuckrufwunsch(): ?bool
    {
        return $this->ruckrufwunsch;
    }

    public function setRuckrufwunsch(?bool $ruckrufwunsch): self
    {
        $this->ruckrufwunsch = $ruckrufwunsch;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(?string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getErstellungsdatum(): ?\DateTimeInterface
    {
        return $this->erstellungsdatum;
    }

    public function setErstellungsdatum(\DateTimeInterface $erstellungsdatum): self
    {
        $this->erstellungsdatum = $erstellungsdatum;

        return $this;
    }

    public function getAnderungsdatum(): ?\DateTimeInterface
    {
        return $this->anderungsdatum;
    }

    public function setAnderungsdatum(\DateTimeInterface $anderungsdatum): self
    {
        $this->anderungsdatum = $anderungsdatum;

        return $this;
    }
}
