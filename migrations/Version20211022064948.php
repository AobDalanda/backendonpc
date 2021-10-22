<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20211022064948 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE departements ADD regions_id INT NOT NULL');
        $this->addSql('ALTER TABLE departements ADD CONSTRAINT FK_CF7489B2FCE83E5F FOREIGN KEY (regions_id) REFERENCES regions (id)');
        $this->addSql('CREATE INDEX IDX_CF7489B2FCE83E5F ON departements (regions_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE departements DROP FOREIGN KEY FK_CF7489B2FCE83E5F');
        $this->addSql('DROP INDEX IDX_CF7489B2FCE83E5F ON departements');
        $this->addSql('ALTER TABLE departements DROP regions_id');
    }
}
