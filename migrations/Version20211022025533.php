<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20211022025533 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE regions ADD regioninternatguide_id INT NOT NULL');
        $this->addSql('ALTER TABLE regions ADD CONSTRAINT FK_A26779F39BB1E8DA FOREIGN KEY (regioninternatguide_id) REFERENCES regions_internat_guide (id)');
        $this->addSql('CREATE INDEX IDX_A26779F39BB1E8DA ON regions (regioninternatguide_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE regions DROP FOREIGN KEY FK_A26779F39BB1E8DA');
        $this->addSql('DROP INDEX IDX_A26779F39BB1E8DA ON regions');
        $this->addSql('ALTER TABLE regions DROP regioninternatguide_id');
    }
}
