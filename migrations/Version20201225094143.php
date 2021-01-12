<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20201225094143 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE employer (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(255) NOT NULL, telephone VARCHAR(89) NOT NULL, adresse VARCHAR(87) NOT NULL, salaire INT NOT NULL, avance INT DEFAULT NULL, reste INT DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE mesure_femme (id INT AUTO_INCREMENT NOT NULL, client_id INT DEFAULT NULL, epaule DOUBLE PRECISION DEFAULT NULL, mass_courte DOUBLE PRECISION DEFAULT NULL, mass_trois_quart DOUBLE PRECISION DEFAULT NULL, mass_longue DOUBLE PRECISION DEFAULT NULL, tour_de_masse DOUBLE PRECISION DEFAULT NULL, poitrine DOUBLE PRECISION DEFAULT NULL, taille DOUBLE PRECISION DEFAULT NULL, ceinture DOUBLE PRECISION DEFAULT NULL, anche DOUBLE PRECISION DEFAULT NULL, longueur_blouse DOUBLE PRECISION DEFAULT NULL, longueur_boubou DOUBLE PRECISION DEFAULT NULL, longueur_jupe DOUBLE PRECISION DEFAULT NULL, longueur_pagne DOUBLE PRECISION DEFAULT NULL, longueur_robr_trois_quart DOUBLE PRECISION DEFAULT NULL, longueur_robe_longue DOUBLE PRECISION DEFAULT NULL, jupe_courte DOUBLE PRECISION DEFAULT NULL, jupe_trois_quart DOUBLE PRECISION DEFAULT NULL, jupe_longue DOUBLE PRECISION DEFAULT NULL, INDEX IDX_36CC3BED19EB6921 (client_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE mesure_homme (id INT AUTO_INCREMENT NOT NULL, client_id INT DEFAULT NULL, epaul DOUBLE PRECISION DEFAULT NULL, mass_courte DOUBLE PRECISION DEFAULT NULL, mass_long DOUBLE PRECISION DEFAULT NULL, mass_trois_quart DOUBLE PRECISION DEFAULT NULL, tourde_mass DOUBLE PRECISION DEFAULT NULL, poigner DOUBLE PRECISION DEFAULT NULL, coup DOUBLE PRECISION DEFAULT NULL, poitrine DOUBLE PRECISION DEFAULT NULL, longueur_boub DOUBLE PRECISION DEFAULT NULL, demi_saison DOUBLE PRECISION DEFAULT NULL, trois_quart DOUBLE PRECISION DEFAULT NULL, ceinture DOUBLE PRECISION DEFAULT NULL, longueur_pantalon DOUBLE PRECISION DEFAULT NULL, cuisse DOUBLE PRECISION DEFAULT NULL, anche DOUBLE PRECISION DEFAULT NULL, INDEX IDX_E64165E819EB6921 (client_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE reset_password_request (id INT AUTO_INCREMENT NOT NULL, user_id INT NOT NULL, selector VARCHAR(20) NOT NULL, hashed_token VARCHAR(100) NOT NULL, requested_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', expires_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', INDEX IDX_7CE748AA76ED395 (user_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE mesure_femme ADD CONSTRAINT FK_36CC3BED19EB6921 FOREIGN KEY (client_id) REFERENCES client (id)');
        $this->addSql('ALTER TABLE mesure_homme ADD CONSTRAINT FK_E64165E819EB6921 FOREIGN KEY (client_id) REFERENCES client (id)');
        $this->addSql('ALTER TABLE reset_password_request ADD CONSTRAINT FK_7CE748AA76ED395 FOREIGN KEY (user_id) REFERENCES users (id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE employer');
        $this->addSql('DROP TABLE mesure_femme');
        $this->addSql('DROP TABLE mesure_homme');
        $this->addSql('DROP TABLE reset_password_request');
    }
}
