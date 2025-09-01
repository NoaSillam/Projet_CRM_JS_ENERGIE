<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240916175914 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE planning ADD nom VARCHAR(255) NOT NULL, ADD prenom VARCHAR(255) NOT NULL, ADD telephone VARCHAR(255) NOT NULL, ADD email VARCHAR(255) NOT NULL, ADD age_maison INT NOT NULL, ADD consommation_annuel_ou_mensuelle VARCHAR(255) NOT NULL, ADD type_chauffage VARCHAR(255) NOT NULL, ADD superficie_maison INT NOT NULL, ADD situation_familiale VARCHAR(255) NOT NULL, ADD credit_en_cours VARCHAR(255) NOT NULL, ADD revenu_fiscal_reference INT NOT NULL, ADD salaire_mensuel VARCHAR(255) NOT NULL, ADD matiere_murs_ext VARCHAR(255) NOT NULL, ADD age_mrmme VARCHAR(255) NOT NULL, ADD age_chaudiere INT NOT NULL, ADD situation_pro VARCHAR(255) NOT NULL, ADD nbre_personne_charge DOUBLE PRECISION NOT NULL, ADD superficie_murs_ext DOUBLE PRECISION NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE planning DROP nom, DROP prenom, DROP telephone, DROP email, DROP age_maison, DROP consommation_annuel_ou_mensuelle, DROP type_chauffage, DROP superficie_maison, DROP situation_familiale, DROP credit_en_cours, DROP revenu_fiscal_reference, DROP salaire_mensuel, DROP matiere_murs_ext, DROP age_mrmme, DROP age_chaudiere, DROP situation_pro, DROP nbre_personne_charge, DROP superficie_murs_ext');
    }
}
