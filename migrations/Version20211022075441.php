<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20211022075441 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE etablissements ADD villes_id INT NOT NULL, ADD clients_id INT NOT NULL');
        $this->addSql('ALTER TABLE etablissements ADD CONSTRAINT FK_29F65EB1286C17BC FOREIGN KEY (villes_id) REFERENCES villes (id)');
        $this->addSql('ALTER TABLE etablissements ADD CONSTRAINT FK_29F65EB1AB014612 FOREIGN KEY (clients_id) REFERENCES clients (id)');
        $this->addSql('CREATE INDEX IDX_29F65EB1286C17BC ON etablissements (villes_id)');
        $this->addSql('CREATE INDEX IDX_29F65EB1AB014612 ON etablissements (clients_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE etablissements DROP FOREIGN KEY FK_29F65EB1286C17BC');
        $this->addSql('ALTER TABLE etablissements DROP FOREIGN KEY FK_29F65EB1AB014612');
        $this->addSql('DROP INDEX IDX_29F65EB1286C17BC ON etablissements');
        $this->addSql('DROP INDEX IDX_29F65EB1AB014612 ON etablissements');
        $this->addSql('ALTER TABLE etablissements DROP villes_id, DROP clients_id');
    }
}
