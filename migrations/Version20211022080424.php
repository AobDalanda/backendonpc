<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20211022080424 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE ordres_participations_produits ADD etablissements_id INT NOT NULL');
        $this->addSql('ALTER TABLE ordres_participations_produits ADD CONSTRAINT FK_D79834F3D23B76CD FOREIGN KEY (etablissements_id) REFERENCES etablissements (id)');
        $this->addSql('CREATE INDEX IDX_D79834F3D23B76CD ON ordres_participations_produits (etablissements_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE ordres_participations_produits DROP FOREIGN KEY FK_D79834F3D23B76CD');
        $this->addSql('DROP INDEX IDX_D79834F3D23B76CD ON ordres_participations_produits');
        $this->addSql('ALTER TABLE ordres_participations_produits DROP etablissements_id');
    }
}
