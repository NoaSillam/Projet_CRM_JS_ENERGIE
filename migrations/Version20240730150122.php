<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240730150122 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE planning (id INT AUTO_INCREMENT NOT NULL, date DATETIME NOT NULL, commentaire LONGTEXT NOT NULL, id_lead_id INT DEFAULT NULL, INDEX IDX_D499BFF6DEC8ECFD (id_lead_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4');
        $this->addSql('ALTER TABLE planning ADD CONSTRAINT FK_D499BFF6DEC8ECFD FOREIGN KEY (id_lead_id) REFERENCES `lead` (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE planning DROP FOREIGN KEY FK_D499BFF6DEC8ECFD');
        $this->addSql('DROP TABLE planning');
    }
}
