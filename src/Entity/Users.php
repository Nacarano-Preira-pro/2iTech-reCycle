<?php

namespace App\Entity;

use App\Repository\UsersRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: UsersRepository::class)]
class Users
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 20)]
    private $pseudoUser;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $imageUser;

    #[ORM\Column(type: 'string', length: 50)]
    private $emailUser;

    #[ORM\Column(type: 'string', length: 255)]
    private $passwordUser;

    #[ORM\Column(type: 'string', length: 20)]
    private $roleUser;

    #[ORM\ManyToOne(targetEntity: Ranks::class)]
    #[ORM\JoinColumn(nullable: false)]
    private $fkRankId;

    #[ORM\Column(type: 'datetime_immutable')]
    private $createdAt;


    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPseudoUser(): ?string
    {
        return $this->pseudoUser;
    }

    public function setPseudoUser(string $pseudoUser): self
    {
        $this->pseudoUser = $pseudoUser;

        return $this;
    }

    public function getImageUser(): ?string
    {
        return $this->imageUser;
    }

    public function setImageUser(?string $imageUser): self
    {
        $this->imageUser = $imageUser;

        return $this;
    }

    public function getEmailUser(): ?string
    {
        return $this->emailUser;
    }

    public function setEmailUser(string $emailUser): self
    {
        $this->emailUser = $emailUser;

        return $this;
    }

    public function getPasswordUser(): ?string
    {
        return $this->passwordUser;
    }

    public function setPasswordUser(string $passwordUser): self
    {
        $this->passwordUser = $passwordUser;

        return $this;
    }

    public function getRoleUser(): ?string
    {
        return $this->roleUser;
    }

    public function setRoleUser(string $roleUser): self
    {
        $this->roleUser = $roleUser;

        return $this;
    }

    public function getFkRankId(): ?Ranks
    {
        return $this->fkRankId;
    }

    public function setFkRankId(?Ranks $fkRankId): self
    {
        $this->fkRankId = $fkRankId;

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
