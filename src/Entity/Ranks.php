<?php

namespace App\Entity;

use App\Repository\RanksRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: RanksRepository::class)]
class Ranks
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'integer')]
    private $levelRank;

    #[ORM\Column(type: 'string', length: 25)]
    private $nameRank;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLevelRank(): ?int
    {
        return $this->levelRank;
    }

    public function setLevelRank(int $levelRank): self
    {
        $this->levelRank = $levelRank;

        return $this;
    }

    public function getNameRank(): ?string
    {
        return $this->nameRank;
    }

    public function setNameRank(string $nameRank): self
    {
        $this->nameRank = $nameRank;

        return $this;
    }
}
