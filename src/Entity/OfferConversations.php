<?php

namespace App\Entity;

use App\Repository\OfferConversationsRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: OfferConversationsRepository::class)]
class OfferConversations
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\ManyToOne(targetEntity: Offers::class)]
    #[ORM\JoinColumn(nullable: false)]
    private $fkOfferId;

    #[ORM\ManyToOne(targetEntity: Users::class)]
    #[ORM\JoinColumn(nullable: false)]
    private $fkAuthorId;

    #[ORM\ManyToOne(targetEntity: Users::class)]
    #[ORM\JoinColumn(nullable: false)]
    private $fkReceiverId;

    #[ORM\Column(type: 'datetime_immutable')]
    private $createdAt;

    #[ORM\ManyToOne(targetEntity: Chats::class)]
    #[ORM\JoinColumn(nullable: false)]
    private $fkChatId;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getFkOfferId(): ?Offers
    {
        return $this->fkOfferId;
    }

    public function setFkOfferId(?Offers $fkOfferId): self
    {
        $this->fkOfferId = $fkOfferId;

        return $this;
    }

    public function getFkAuthorId(): ?Users
    {
        return $this->fkAuthorId;
    }

    public function setFkAuthorId(?Users $fkAuthorId): self
    {
        $this->fkAuthorId = $fkAuthorId;

        return $this;
    }

    public function getFkReceiverId(): ?Users
    {
        return $this->fkReceiverId;
    }

    public function setFkReceiverId(?Users $fkReceiverId): self
    {
        $this->fkReceiverId = $fkReceiverId;

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

    public function getFkChatId(): ?Chats
    {
        return $this->fkChatId;
    }

    public function setFkChatId(?Chats $fkChatId): self
    {
        $this->fkChatId = $fkChatId;

        return $this;
    }
}
