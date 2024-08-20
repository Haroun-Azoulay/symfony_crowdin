<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240820204718 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SEQUENCE sources_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE translations_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE TABLE sources (id INT NOT NULL, translations_id INT NOT NULL, content TEXT NOT NULL, create_date TIMESTAMP(0) WITHOUT TIME ZONE NOT NULL, update_date TIMESTAMP(0) WITHOUT TIME ZONE NOT NULL, key VARCHAR(255) NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE INDEX IDX_D25D65F2ACE9C349 ON sources (translations_id)');
        $this->addSql('COMMENT ON COLUMN sources.create_date IS \'(DC2Type:datetime_immutable)\'');
        $this->addSql('CREATE TABLE translations (id INT NOT NULL, language VARCHAR(255) NOT NULL, translated_content TEXT NOT NULL, create_date TIMESTAMP(0) WITHOUT TIME ZONE NOT NULL, update_date TIMESTAMP(0) WITHOUT TIME ZONE NOT NULL, PRIMARY KEY(id))');
        $this->addSql('COMMENT ON COLUMN translations.create_date IS \'(DC2Type:datetime_immutable)\'');
        $this->addSql('ALTER TABLE sources ADD CONSTRAINT FK_D25D65F2ACE9C349 FOREIGN KEY (translations_id) REFERENCES translations (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE projects ADD sources_id INT NOT NULL');
        $this->addSql('ALTER TABLE projects ADD CONSTRAINT FK_5C93B3A4DD51D0F7 FOREIGN KEY (sources_id) REFERENCES sources (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('CREATE INDEX IDX_5C93B3A4DD51D0F7 ON projects (sources_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SCHEMA public');
        $this->addSql('ALTER TABLE projects DROP CONSTRAINT FK_5C93B3A4DD51D0F7');
        $this->addSql('DROP SEQUENCE sources_id_seq CASCADE');
        $this->addSql('DROP SEQUENCE translations_id_seq CASCADE');
        $this->addSql('ALTER TABLE sources DROP CONSTRAINT FK_D25D65F2ACE9C349');
        $this->addSql('DROP TABLE sources');
        $this->addSql('DROP TABLE translations');
        $this->addSql('DROP INDEX IDX_5C93B3A4DD51D0F7');
        $this->addSql('ALTER TABLE projects DROP sources_id');
    }
}
