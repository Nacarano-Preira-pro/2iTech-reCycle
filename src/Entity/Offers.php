<?php

namespace App\Entity;

use App\Repository\OffersRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: OffersRepository::class)]
class Offers
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 50)]
    private $titleOffer;

    #[ORM\Column(type: 'text')]
    private $contentOffer;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $imageOffer;

    #[ORM\Column(type: 'datetime_immutable')]
    private $createdAt;

    #[ORM\ManyToOne(targetEntity: Status::class)]
    #[ORM\JoinColumn(nullable: false)]
    private $fkStatusId;

    #[ORM\ManyToOne(targetEntity: Categories::class)]
    #[ORM\JoinColumn(nullable: false)]
    private $fkCategoryId;

    #[ORM\ManyToOne(targetEntity: Users::class)]
    #[ORM\JoinColumn(nullable: false)]
    private $fkUserId;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitleOffer(): ?string
    {
        return $this->titleOffer;
    }

    public function setTitleOffer(string $titleOffer): self
    {
        $this->titleOffer = $titleOffer;

        return $this;
    }

    public function getContentOffer(): ?string
    {
        return $this->contentOffer;
    }

    public function setContentOffer(string $contentOffer): self
    {
        $this->contentOffer = $contentOffer;

        return $this;
    }

    public function getImageOffer(): ?string
    {
        return $this->imageOffer;
    }

    public function setImageOffer(string $imageOffer): self
    {
        $this->imageOffer = $imageOffer;

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

    public function getFkUserId(): ?Users
    {
        return $this->fkUserId;
    }

    public function setFkUserId(?Users $fkUserId): self
    {
        $this->fkUserId = $fkUserId;

        return $this;
    }
}
