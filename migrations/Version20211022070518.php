<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20211022070518 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE villes ADD allusers_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE villes ADD CONSTRAINT FK_19209FD889C0050E FOREIGN KEY (allusers_id) REFERENCES all_users (id)');
        $this->addSql('CREATE INDEX IDX_19209FD889C0050E ON villes (allusers_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE villes DROP FOREIGN KEY FK_19209FD889C0050E');
        $this->addSql('DROP INDEX IDX_19209FD889C0050E ON villes');
        $this->addSql('ALTER TABLE villes DROP allusers_id');
    }
}
