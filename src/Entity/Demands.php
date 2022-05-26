<?php

namespace App\Entity;

use App\Repository\DemandsRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: DemandsRepository::class)]
class Demands
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 50)]
    private $titleDemand;

    #[ORM\Column(type: 'text')]
    private $contentDemand;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $imageDemand;

    #[ORM\ManyToOne(targetEntity: Status::class)]
    #[ORM\JoinColumn(nullable: false)]
    private $fkStatusId;

    #[ORM\ManyToOne(targetEntity: Categories::class)]
    #[ORM\JoinColumn(nullable: false)]
    private $fkCategoryId;

    #[ORM\Column(type: 'datetime_immutable')]
    private $createdAt;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitleDemand(): ?string
    {
        return $this->titleDemand;
    }

    public function setTitleDemand(string $titleDemand): self
    {
        $this->titleDemand = $titleDemand;

        return $this;
    }

    public function getContentDemand(): ?string
    {
        return $this->contentDemand;
    }

    public function setContentDemand(string $contentDemand): self
    {
        $this->contentDemand = $contentDemand;

        return $this;
    }

    public function getImageDemand(): ?string
    {
        return $this->imageDemand;
    }

    public function setImageDemand(?string $imageDemand): self
    {
        $this->imageDemand = $imageDemand;

        return $this;
    }

    public function getFkStatusId(): ?Status
    {
        return $this->fkStatusId;
    }

    public function setFkStatusId(?Status $fkStatusId): self
    {
        $this->fkStatusId = $fkStatusId;

        return $this;
    }

    public function getFkCategoryId(): ?Categories
    {
        return $this->fkCategoryId;
    }

    public function setFkCategoryId(?Categories $fkCategoryId): self
    {
        $this->fkCategoryId = $fkCategoryId;

        return $this;
    }

    public function getCreatedAt(): ?\DateTimeImmutable
    {
        return $this->createdAt;
    }

    public function setCreatedAt(\DateTimeImmutable $createdAt): self
    {
        $this->createdAt = $createdAt;

        return $this;
    }
}
