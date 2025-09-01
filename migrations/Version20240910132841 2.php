<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240910132841 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE bath (id INT AUTO_INCREMENT NOT NULL, piece_identite VARCHAR(255) NOT NULL, livret_famille VARCHAR(255) NOT NULL, avis_impots VARCHAR(255) NOT NULL, tace_fonciere VARCHAR(255) NOT NULL, preconisation_travaux VARCHAR(255) NOT NULL, dpe VARCHAR(255) DEFAULT NULL, nom VARCHAR(255) NOT NULL, prenom VARCHAR(255) NOT NULL, code_postal VARCHAR(255) NOT NULL, departement VARCHAR(255) NOT NULL, telephone VARCHAR(255) NOT NULL, revenu INT NOT NULL, metre_carre INT NOT NULL, menage VARCHAR(255) NOT NULL, isolation VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE bath');
    }
}
