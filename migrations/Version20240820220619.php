<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240820220619 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE projects DROP CONSTRAINT fk_5c93b3a49d86650f');
        $this->addSql('DROP INDEX idx_5c93b3a49d86650f');
        $this->addSql('ALTER TABLE projects RENAME COLUMN user_id_id TO user_id');
        $this->addSql('ALTER TABLE projects ADD CONSTRAINT FK_5C93B3A4A76ED395 FOREIGN KEY (user_id) REFERENCES "user" (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('CREATE INDEX IDX_5C93B3A4A76ED395 ON projects (user_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SCHEMA public');
        $this->addSql('ALTER TABLE projects DROP CONSTRAINT FK_5C93B3A4A76ED395');
        $this->addSql('DROP INDEX IDX_5C93B3A4A76ED395');
        $this->addSql('ALTER TABLE projects RENAME COLUMN user_id TO user_id_id');
        $this->addSql('ALTER TABLE projects ADD CONSTRAINT fk_5c93b3a49d86650f FOREIGN KEY (user_id_id) REFERENCES "user" (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('CREATE INDEX idx_5c93b3a49d86650f ON projects (user_id_id)');
    }
}
