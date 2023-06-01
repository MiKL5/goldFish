<?php

namespace App\Entity;

use App\Repository\AdressRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: AdressRepository::class)]
class Adress
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 100)]
    private ?string $billing_adress = null;

    #[ORM\Column(length: 6)]
    private ?string $billing_zipcode = null;

    #[ORM\Column(length: 50)]
    private ?string $billing_city = null;

    #[ORM\Column(length: 100)]
    private ?string $delivery_adress = null;

    #[ORM\Column(length: 6)]
    private ?string $delivery_zipcode = null;

    #[ORM\Column(length: 50)]
    private ?string $delivery_city = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getBillingAdress(): ?string
    {
        return $this->billing_adress;
    }

    public function setBillingAdress(string $billing_adress): self
    {
        $this->billing_adress = $billing_adress;

        return $this;
    }

    public function getBillingZipcode(): ?string
    {
        return $this->billing_zipcode;
    }

    public function setBillingZipcode(string $billing_zipcode): self
    {
        $this->billing_zipcode = $billing_zipcode;

        return $this;
    }

    public function getBillingCity(): ?string
    {
        return $this->billing_city;
    }

    public function setBillingCity(string $billing_city): self
    {
        $this->billing_city = $billing_city;

        return $this;
    }

    public function getDeliveryAdress(): ?string
    {
        return $this->delivery_adress;
    }

    public function setDeliveryAdress(string $delivery_adress): self
    {
        $this->delivery_adress = $delivery_adress;

        return $this;
    }

    public function getDeliveryZipcode(): ?string
    {
        return $this->delivery_zipcode;
    }

    public function setDeliveryZipcode(string $delivery_zipcode): self
    {
        $this->delivery_zipcode = $delivery_zipcode;

        return $this;
    }

    public function getDeliveryCity(): ?string
    {
        return $this->delivery_city;
    }

    public function setDeliveryCity(string $delivery_city): self
    {
        $this->delivery_city = $delivery_city;

        return $this;
    }
}
