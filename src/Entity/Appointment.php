<?php

namespace App\Entity;

use ApiPlatform\Metadata\ApiResource;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ApiResource]
#[ORM\Entity]
class Appointment
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $title = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $startAppointmentDatetime = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $endAppointmentDatetime = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(string $title): static
    {
        $this->title = $title;

        return $this;
    }

    public function getStartAppointmentDatetime(): ?\DateTimeInterface
    {
        return $this->startAppointmentDatetime;
    }

    public function setStartAppointmentDatetime(\DateTimeInterface $startAppointmentDatetime): static
    {
        $this->startAppointmentDatetime = $startAppointmentDatetime;

        return $this;
    }

    public function getEndAppointmentDatetime(): ?\DateTimeInterface
    {
        return $this->endAppointmentDatetime;
    }

    public function setEndAppointmentDatetime(\DateTimeInterface $endAppointmentDatetime): static
    {
        $this->endAppointmentDatetime = $endAppointmentDatetime;

        return $this;
    }
}
