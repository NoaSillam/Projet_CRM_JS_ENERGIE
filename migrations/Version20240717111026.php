<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240717111026 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE `lead` (id INT AUTO_INCREMENT NOT NULL, users_id INT DEFAULT NULL, id_enregistrement VARCHAR(255) NOT NULL, heure_creation DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', nom_complet VARCHAR(255) NOT NULL, telephone INT NOT NULL, chauffage VARCHAR(255) NOT NULL, departement INT NOT NULL, commentaire LONGTEXT NOT NULL, INDEX IDX_289161CB67B3B43D (users_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE `lead` ADD CONSTRAINT FK_289161CB67B3B43D FOREIGN KEY (users_id) REFERENCES users (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE `lead` DROP FOREIGN KEY FK_289161CB67B3B43D');
        $this->addSql('DROP TABLE `lead`');
    }
}
