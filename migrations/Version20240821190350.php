<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240821190350 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE sources ADD translations_id INT NOT NULL');
        $this->addSql('ALTER TABLE sources ADD CONSTRAINT FK_D25D65F2ACE9C349 FOREIGN KEY (translations_id) REFERENCES translations (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('CREATE INDEX IDX_D25D65F2ACE9C349 ON sources (translations_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SCHEMA public');
        $this->addSql('ALTER TABLE sources DROP CONSTRAINT FK_D25D65F2ACE9C349');
        $this->addSql('DROP INDEX IDX_D25D65F2ACE9C349');
        $this->addSql('ALTER TABLE sources DROP translations_id');
    }
}
