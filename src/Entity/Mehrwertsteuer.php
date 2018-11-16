<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\MehrwertsteuerRepository")
 */
class Mehrwertsteuer
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="float")
     */
    private $psatz;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $bez1;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPsatz(): ?float
    {
        return $this->psatz;
    }

    public function setPsatz(float $psatz): self
    {
        $this->psatz = $psatz;

        return $this;
    }

    public function getBez1(): ?string
    {
        return $this->bez1;
    }

    public function setBez1(string $bez1): self
    {
        $this->bez1 = $bez1;

        return $this;
    }
}
