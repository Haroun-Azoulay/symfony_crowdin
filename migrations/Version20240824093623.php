<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240824093623 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE projects DROP CONSTRAINT fk_5c93b3a4dd51d0f7');
        $this->addSql('DROP INDEX idx_5c93b3a4dd51d0f7');
        $this->addSql('ALTER TABLE projects DROP sources_id');
        $this->addSql('ALTER TABLE sources ADD projects_id INT NOT NULL');
        $this->addSql('ALTER TABLE sources ADD CONSTRAINT FK_D25D65F21EDE0F55 FOREIGN KEY (projects_id) REFERENCES projects (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('CREATE INDEX IDX_D25D65F21EDE0F55 ON sources (projects_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SCHEMA public');
        $this->addSql('ALTER TABLE sources DROP CONSTRAINT FK_D25D65F21EDE0F55');
        $this->addSql('DROP INDEX IDX_D25D65F21EDE0F55');
        $this->addSql('ALTER TABLE sources DROP projects_id');
        $this->addSql('ALTER TABLE projects ADD sources_id INT NOT NULL');
        $this->addSql('ALTER TABLE projects ADD CONSTRAINT fk_5c93b3a4dd51d0f7 FOREIGN KEY (sources_id) REFERENCES sources (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('CREATE INDEX idx_5c93b3a4dd51d0f7 ON projects (sources_id)');
    }
}
