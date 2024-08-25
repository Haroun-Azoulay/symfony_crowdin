<?php

namespace App\Entity;

use App\Repository\TranslationsRepository;
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

    #[ORM\ManyToOne(inversedBy: 'translations')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Sources $source = null;

    public function __construct()
    {
        $this->create_date = new \DateTimeImmutable();
        $this->update_date = new \DateTime();
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


    public function getUpdateDate(): ?\DateTimeInterface
    {
        return $this->update_date;
    }


    public function getSource(): ?Sources
    {
        return $this->source;
    }

    public function setSource(?Sources $source): static
    {
        $this->source = $source;

        return $this;
    }
}
