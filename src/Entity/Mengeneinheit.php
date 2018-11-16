<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\MengeneinheitRepository")
 */
class Mengeneinheit
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
    private $bez1;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $bez2;

    public function getId(): ?int
    {
        return $this->id;
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

    public function getBez2(): ?string
    {
        return $this->bez2;
    }

    public function setBez2(string $bez2): self
    {
        $this->bez2 = $bez2;

        return $this;
    }
}
