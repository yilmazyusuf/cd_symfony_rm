<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20211027095945 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE retouren (id INT AUTO_INCREMENT NOT NULL, kunden_nummer VARCHAR(50) NOT NULL, lieferschein_auftragsnummer VARCHAR(50) NOT NULL, menge INT NOT NULL, bezeichnung VARCHAR(255) DEFAULT NULL, umtausch_grund LONGTEXT DEFAULT NULL, weitere_informationen LONGTEXT DEFAULT NULL, zahlungsart SMALLINT NOT NULL, ruckrufwunsch TINYINT(1) DEFAULT NULL, email VARCHAR(120) DEFAULT NULL, erstellungsdatum DATE NOT NULL, anderungsdatum DATE NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE retouren');
    }
}
