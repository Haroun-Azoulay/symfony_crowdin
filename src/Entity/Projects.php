<?php

namespace App\Entity;

use App\Repository\ProjectsRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ProjectsRepository::class)]
class Projects
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $name = null;

    #[ORM\Column(length: 255)]
    private ?string $source_language = null;

    #[ORM\Column]
    private ?\DateTimeImmutable $create_date = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $update_date = null;
    
    #[ORM\ManyToOne(inversedBy: 'projects')]
    #[ORM\JoinColumn(nullable: false)]
    private ?User $user = null;

    #[ORM\Column(length: 255)]
    private ?string $target_languages = null;

    #[ORM\ManyToOne(inversedBy: 'project')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Sources $sources = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): static
    {
        $this->name = $name;

        return $this;
    }

    public function getSourceLanguage(): ?string
    {
        return $this->source_language;
    }

    public function setSourceLanguage(string $source_language): static
    {
        $this->source_language = $source_language;

        return $this;
    }

    public function getCreateDate(): ?\DateTimeImmutable
    {
        return $this->create_date;
    }

    public function setCreateDate(\DateTimeImmutable $create_date): static
    {
        $this->create_date = $create_date;

        return $this;
    }

    public function getUpdateDate(): ?\DateTimeInterface
    {
        return $this->update_date;
    }

    public function setUpdateDate(\DateTimeInterface $update_date): static
    {
        $this->update_date = $update_date;

        return $this;
    }

    public function getUserId(): ?User
    {
        return $this->user;
    }

    public function setUserId(?User $user): static
    {
        $this->user = $user;

        return $this;
    }

    public function getTargetLanguages(): ?string
    {
        return $this->target_languages;
    }

    public function setTargetLanguages(string $target_languages): static
    {
        $this->target_languages = $target_languages;

        return $this;
    }

    public function getSources(): ?Sources
    {
        return $this->sources;
    }

    public function setSources(?Sources $sources): static
    {
        $this->sources = $sources;

        return $this;
    }
}
