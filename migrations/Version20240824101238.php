<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240824101238 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE sources DROP CONSTRAINT fk_d25d65f2ace9c349');
        $this->addSql('DROP INDEX idx_d25d65f2ace9c349');
        $this->addSql('ALTER TABLE sources DROP translations_id');
        $this->addSql('ALTER TABLE translations ADD source_id INT NOT NULL');
        $this->addSql('ALTER TABLE translations ADD CONSTRAINT FK_C6B7DA87953C1C61 FOREIGN KEY (source_id) REFERENCES sources (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('CREATE INDEX IDX_C6B7DA87953C1C61 ON translations (source_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SCHEMA public');
        $this->addSql('ALTER TABLE translations DROP CONSTRAINT FK_C6B7DA87953C1C61');
        $this->addSql('DROP INDEX IDX_C6B7DA87953C1C61');
        $this->addSql('ALTER TABLE translations DROP source_id');
        $this->addSql('ALTER TABLE sources ADD translations_id INT NOT NULL');
        $this->addSql('ALTER TABLE sources ADD CONSTRAINT fk_d25d65f2ace9c349 FOREIGN KEY (translations_id) REFERENCES translations (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('CREATE INDEX idx_d25d65f2ace9c349 ON sources (translations_id)');
    }
}
