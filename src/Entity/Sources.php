<?php

namespace App\Entity;

use App\Repository\SourcesRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: SourcesRepository::class)]
class Sources
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $content = null;

    #[ORM\Column]
    private ?\DateTimeImmutable $create_date = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $update_date = null;

    #[ORM\Column(length: 255)]
    private ?string $key = null;

    /**
     * @var Collection<int, Projects>
     */
    #[ORM\OneToMany(targetEntity: Projects::class, mappedBy: 'sources')]
    private Collection $project;

    #[ORM\ManyToOne(inversedBy: 'source')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Translations $translations = null;

    public function __construct()
    {
        $this->project = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getContent(): ?string
    {
        return $this->content;
    }

    public function setContent(string $content): static
    {
        $this->content = $content;

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

    public function getKey(): ?string
    {
        return $this->key;
    }

    public function setKey(string $key): static
    {
        $this->key = $key;

        return $this;
    }

    /**
     * @return Collection<int, Projects>
     */
    public function getProject(): Collection
    {
        return $this->project;
    }

    public function addProject(Projects $project): static
    {
        if (!$this->project->contains($project)) {
            $this->project->add($project);
            $project->setSources($this);
        }

        return $this;
    }

    public function removeProject(Projects $project): static
    {
        if ($this->project->removeElement($project)) {
            // set the owning side to null (unless already changed)
            if ($project->getSources() === $this) {
                $project->setSources(null);
            }
        }

        return $this;
    }

    public function getTranslations(): ?Translations
    {
        return $this->translations;
    }

    public function setTranslations(?Translations $translations): static
    {
        $this->translations = $translations;

        return $this;
    }
}
