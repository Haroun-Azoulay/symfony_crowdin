<?php

namespace App\Entity;

use App\Repository\ProjectsRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
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

    #[ORM\Column]
    private ?\DateTimeImmutable $create_date = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $update_date = null;

    #[ORM\ManyToOne(inversedBy: 'projects')]
    #[ORM\JoinColumn(nullable: false)]
    private ?User $user = null;

    #[ORM\Column(type: Types::JSON, nullable: false)]
    private ?array $target_languages = null;

    /**
     * @var Collection<int, Sources>
     */
    #[ORM\OneToMany(targetEntity: Sources::class, mappedBy: 'projects', cascade:["persist", "remove"], orphanRemoval: true)]
    private Collection $sources;

    #[ORM\Column(length: 255)]
    private ?string $start_language = null;

    public function __construct()
    {
        $this->create_date = new \DateTimeImmutable();
        $this->update_date = new \DateTime();
        $this->sources = new ArrayCollection();
    }

    public function getCreatedAt(): \DateTimeImmutable
    {
        return $this->create_date;
    }

    public function getUpdateDate(): ?\DateTimeInterface
    {
        return $this->update_date;
    }

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

    public function getUser(): ?User
    {
        return $this->user;
    }

    public function setUser(?User $user): static
    {
        $this->user = $user;

        return $this;
    }

    public function getTargetLanguages(): ?array
    {
        return $this->target_languages;
    }

    public function setTargetLanguages(array $target_languages): static
    {
        $this->target_languages = $target_languages;

        return $this;
    }

    /**
     * @return Collection<int, Sources>
     */
    public function getSources(): Collection
    {
        return $this->sources;
    }

    public function addSource(Sources $source): static
    {
        if (!$this->sources->contains($source)) {
            $this->sources->add($source);
            $source->setProjects($this);
        }

        return $this;
    }

    public function removeSource(Sources $source): static
    {
        if ($this->sources->removeElement($source)) {
            // set the owning side to null (unless already changed)
            if ($source->getProjects() === $this) {
                $source->setProjects(null);
            }
        }

        return $this;
    }

    public function getStartLanguage(): ?string
    {
        return $this->start_language;
    }

    public function setStartLanguage(string $start_language): static
    {
        $this->start_language = $start_language;

        return $this;
    }
}
