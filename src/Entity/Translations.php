<?php

namespace App\Entity;

use App\Repository\TranslationsRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: TranslationsRepository::class)]
class Translations
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $language = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $translated_content = null;

    #[ORM\Column]
    private ?\DateTimeImmutable $create_date = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $update_date = null;

    /**
     * @var Collection<int, Sources>
     */
    #[ORM\OneToMany(targetEntity: Sources::class, mappedBy: 'translations')]
    private Collection $source;

    public function __construct()
    {
        $this->source = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLanguage(): ?string
    {
        return $this->language;
    }

    public function setLanguage(string $language): static
    {
        $this->language = $language;

        return $this;
    }

    public function getTranslatedContent(): ?string
    {
        return $this->translated_content;
    }

    public function setTranslatedContent(string $translated_content): static
    {
        $this->translated_content = $translated_content;

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

    /**
     * @return Collection<int, Sources>
     */
    public function getSource(): Collection
    {
        return $this->source;
    }

    public function addSource(Sources $source): static
    {
        if (!$this->source->contains($source)) {
            $this->source->add($source);
            $source->setTranslations($this);
        }

        return $this;
    }

    public function removeSource(Sources $source): static
    {
        if ($this->source->removeElement($source)) {
            // set the owning side to null (unless already changed)
            if ($source->getTranslations() === $this) {
                $source->setTranslations(null);
            }
        }

        return $this;
    }
}