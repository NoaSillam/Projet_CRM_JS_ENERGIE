<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250722161749 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE `lead` ADD technicien_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE `lead` ADD CONSTRAINT FK_289161CB13457256 FOREIGN KEY (technicien_id) REFERENCES users (id)');
        $this->addSql('CREATE INDEX IDX_289161CB13457256 ON `lead` (technicien_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE `lead` DROP FOREIGN KEY FK_289161CB13457256');
        $this->addSql('DROP INDEX IDX_289161CB13457256 ON `lead`');
        $this->addSql('ALTER TABLE `lead` DROP technicien_id');
    }
}
