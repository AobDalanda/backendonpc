<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20211022073148 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE etablissements ADD dioceses_id INT NOT NULL, ADD rubriques_id INT NOT NULL, ADD sources_mises_ajour_id INT NOT NULL, ADD categories_organismes_id INT NOT NULL, ADD types_etablissements_id INT NOT NULL');
        $this->addSql('ALTER TABLE etablissements ADD CONSTRAINT FK_29F65EB19EA66581 FOREIGN KEY (dioceses_id) REFERENCES dioceses (id)');
        $this->addSql('ALTER TABLE etablissements ADD CONSTRAINT FK_29F65EB1589A0FBB FOREIGN KEY (rubriques_id) REFERENCES rubriques (id)');
        $this->addSql('ALTER TABLE etablissements ADD CONSTRAINT FK_29F65EB1C86241FB FOREIGN KEY (sources_mises_ajour_id) REFERENCES sources_mises_ajour (id)');
        $this->addSql('ALTER TABLE etablissements ADD CONSTRAINT FK_29F65EB1DE91D6B5 FOREIGN KEY (categories_organismes_id) REFERENCES categories_organismes (id)');
        $this->addSql('ALTER TABLE etablissements ADD CONSTRAINT FK_29F65EB1BFB2DD8E FOREIGN KEY (types_etablissements_id) REFERENCES types_etablissements (id)');
        $this->addSql('CREATE INDEX IDX_29F65EB19EA66581 ON etablissements (dioceses_id)');
        $this->addSql('CREATE INDEX IDX_29F65EB1589A0FBB ON etablissements (rubriques_id)');
        $this->addSql('CREATE INDEX IDX_29F65EB1C86241FB ON etablissements (sources_mises_ajour_id)');
        $this->addSql('CREATE INDEX IDX_29F65EB1DE91D6B5 ON etablissements (categories_organismes_id)');
        $this->addSql('CREATE INDEX IDX_29F65EB1BFB2DD8E ON etablissements (types_etablissements_id)');
        $this->addSql('ALTER TABLE ordres_participations ADD clients_id INT NOT NULL');
        $this->addSql('ALTER TABLE ordres_participations ADD CONSTRAINT FK_A2E543C4AB014612 FOREIGN KEY (clients_id) REFERENCES clients (id)');
        $this->addSql('CREATE INDEX IDX_A2E543C4AB014612 ON ordres_participations (clients_id)');
        $this->addSql('ALTER TABLE ordres_participations_produits ADD produits_id INT NOT NULL, ADD ordreparticipations_id INT NOT NULL, ADD etablissements_id INT NOT NULL');
        $this->addSql('ALTER TABLE ordres_participations_produits ADD CONSTRAINT FK_D79834F3CD11A2CF FOREIGN KEY (produits_id) REFERENCES produits (id)');
        $this->addSql('ALTER TABLE ordres_participations_produits ADD CONSTRAINT FK_D79834F37331D40D FOREIGN KEY (ordreparticipations_id) REFERENCES ordres_participations (id)');
        $this->addSql('ALTER TABLE ordres_participations_produits ADD CONSTRAINT FK_D79834F3D23B76CD FOREIGN KEY (etablissements_id) REFERENCES etablissements (id)');
        $this->addSql('CREATE INDEX IDX_D79834F3CD11A2CF ON ordres_participations_produits (produits_id)');
        $this->addSql('CREATE INDEX IDX_D79834F37331D40D ON ordres_participations_produits (ordreparticipations_id)');
        $this->addSql('CREATE INDEX IDX_D79834F3D23B76CD ON ordres_participations_produits (etablissements_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE etablissements DROP FOREIGN KEY FK_29F65EB19EA66581');
        $this->addSql('ALTER TABLE etablissements DROP FOREIGN KEY FK_29F65EB1589A0FBB');
        $this->addSql('ALTER TABLE etablissements DROP FOREIGN KEY FK_29F65EB1C86241FB');
        $this->addSql('ALTER TABLE etablissements DROP FOREIGN KEY FK_29F65EB1DE91D6B5');
        $this->addSql('ALTER TABLE etablissements DROP FOREIGN KEY FK_29F65EB1BFB2DD8E');
        $this->addSql('DROP INDEX IDX_29F65EB19EA66581 ON etablissements');
        $this->addSql('DROP INDEX IDX_29F65EB1589A0FBB ON etablissements');
        $this->addSql('DROP INDEX IDX_29F65EB1C86241FB ON etablissements');
        $this->addSql('DROP INDEX IDX_29F65EB1DE91D6B5 ON etablissements');
        $this->addSql('DROP INDEX IDX_29F65EB1BFB2DD8E ON etablissements');
        $this->addSql('ALTER TABLE etablissements DROP dioceses_id, DROP rubriques_id, DROP sources_mises_ajour_id, DROP categories_organismes_id, DROP types_etablissements_id');
        $this->addSql('ALTER TABLE ordres_participations DROP FOREIGN KEY FK_A2E543C4AB014612');
        $this->addSql('DROP INDEX IDX_A2E543C4AB014612 ON ordres_participations');
        $this->addSql('ALTER TABLE ordres_participations DROP clients_id');
        $this->addSql('ALTER TABLE ordres_participations_produits DROP FOREIGN KEY FK_D79834F3CD11A2CF');
        $this->addSql('ALTER TABLE ordres_participations_produits DROP FOREIGN KEY FK_D79834F37331D40D');
        $this->addSql('ALTER TABLE ordres_participations_produits DROP FOREIGN KEY FK_D79834F3D23B76CD');
        $this->addSql('DROP INDEX IDX_D79834F3CD11A2CF ON ordres_participations_produits');
        $this->addSql('DROP INDEX IDX_D79834F37331D40D ON ordres_participations_produits');
        $this->addSql('DROP INDEX IDX_D79834F3D23B76CD ON ordres_participations_produits');
        $this->addSql('ALTER TABLE ordres_participations_produits DROP produits_id, DROP ordreparticipations_id, DROP etablissements_id');
    }
}
