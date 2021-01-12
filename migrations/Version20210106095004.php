<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210106095004 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE mesure_homme1 (id INT AUTO_INCREMENT NOT NULL, e INT DEFAULT NULL, mc INT DEFAULT NULL, ml INT DEFAULT NULL, mtq INT DEFAULT NULL, tm INT DEFAULT NULL, pg INT DEFAULT NULL, cou INT DEFAULT NULL, p INT DEFAULT NULL, lb INT DEFAULT NULL, ds INT DEFAULT NULL, tq INT DEFAULT NULL, c INT DEFAULT NULL, lp INT DEFAULT NULL, cu INT DEFAULT NULL, tha INT DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE mesure_homme1_client (mesure_homme1_id INT NOT NULL, client_id INT NOT NULL, INDEX IDX_65750602D0F05EF (mesure_homme1_id), INDEX IDX_6575060219EB6921 (client_id), PRIMARY KEY(mesure_homme1_id, client_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE mesure_homme1_client ADD CONSTRAINT FK_65750602D0F05EF FOREIGN KEY (mesure_homme1_id) REFERENCES mesure_homme1 (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE mesure_homme1_client ADD CONSTRAINT FK_6575060219EB6921 FOREIGN KEY (client_id) REFERENCES client (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE mesure_homme1_client DROP FOREIGN KEY FK_65750602D0F05EF');
        $this->addSql('DROP TABLE mesure_homme1');
        $this->addSql('DROP TABLE mesure_homme1_client');
    }
}
