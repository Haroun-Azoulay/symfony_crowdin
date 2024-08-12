<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240812112241 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE profil DROP CONSTRAINT fk_e6d6b2979d86650f');
        $this->addSql('DROP INDEX uniq_e6d6b2979d86650f');
        $this->addSql('ALTER TABLE profil RENAME COLUMN user_id_id TO user_id');
        $this->addSql('ALTER TABLE profil ADD CONSTRAINT FK_E6D6B297A76ED395 FOREIGN KEY (user_id) REFERENCES "user" (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_E6D6B297A76ED395 ON profil (user_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SCHEMA public');
        $this->addSql('ALTER TABLE profil DROP CONSTRAINT FK_E6D6B297A76ED395');
        $this->addSql('DROP INDEX UNIQ_E6D6B297A76ED395');
        $this->addSql('ALTER TABLE profil RENAME COLUMN user_id TO user_id_id');
        $this->addSql('ALTER TABLE profil ADD CONSTRAINT fk_e6d6b2979d86650f FOREIGN KEY (user_id_id) REFERENCES "user" (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('CREATE UNIQUE INDEX uniq_e6d6b2979d86650f ON profil (user_id_id)');
    }
}
