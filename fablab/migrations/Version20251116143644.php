<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20251116143644 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE categorie (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, description VARCHAR(255) NOT NULL, publiée BOOLEAN NOT NULL)');
        $this->addSql('CREATE TABLE categorie_materiel (categorie_id INTEGER NOT NULL, materiel_id INTEGER NOT NULL, PRIMARY KEY(categorie_id, materiel_id), CONSTRAINT FK_2055F1FBBCF5E72D FOREIGN KEY (categorie_id) REFERENCES categorie (id) ON DELETE CASCADE NOT DEFERRABLE INITIALLY IMMEDIATE, CONSTRAINT FK_2055F1FB16880AAF FOREIGN KEY (materiel_id) REFERENCES materiel (id) ON DELETE CASCADE NOT DEFERRABLE INITIALLY IMMEDIATE)');
        $this->addSql('CREATE INDEX IDX_2055F1FBBCF5E72D ON categorie_materiel (categorie_id)');
        $this->addSql('CREATE INDEX IDX_2055F1FB16880AAF ON categorie_materiel (materiel_id)');
        $this->addSql('CREATE TABLE member (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, inventaires_id INTEGER DEFAULT NULL, categorie_id INTEGER DEFAULT NULL, email VARCHAR(180) NOT NULL, roles CLOB NOT NULL --(DC2Type:json)
        , password VARCHAR(255) NOT NULL, nom VARCHAR(255) NOT NULL, description VARCHAR(255) DEFAULT NULL, CONSTRAINT FK_70E4FA787A6D8980 FOREIGN KEY (inventaires_id) REFERENCES lieu (id) NOT DEFERRABLE INITIALLY IMMEDIATE, CONSTRAINT FK_70E4FA78BCF5E72D FOREIGN KEY (categorie_id) REFERENCES categorie (id) NOT DEFERRABLE INITIALLY IMMEDIATE)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_70E4FA787A6D8980 ON member (inventaires_id)');
        $this->addSql('CREATE INDEX IDX_70E4FA78BCF5E72D ON member (categorie_id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_IDENTIFIER_EMAIL ON member (email)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE categorie');
        $this->addSql('DROP TABLE categorie_materiel');
        $this->addSql('DROP TABLE member');
    }
}
