<?php


declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

final class Version20240823131938 extends AbstractMigration
{
    public function getDescription(): string
    {
        return 'Change target_languages column type to JSON in projects table';
    }

    public function up(Schema $schema): void
    {
        // Convert the existing target_languages data to JSON
        $this->addSql('ALTER TABLE projects ALTER COLUMN target_languages TYPE JSON USING target_languages::json');
    }

    public function down(Schema $schema): void
    {
        // Revert the target_languages column back to VARCHAR(255)
        $this->addSql('ALTER TABLE projects ALTER COLUMN target_languages TYPE VARCHAR(255) USING target_languages::text');
    }
}
