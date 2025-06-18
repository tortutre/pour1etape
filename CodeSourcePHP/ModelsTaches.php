<?php
namespace App\Models;

use App\Interfaces\Affichable;

class Tache implements Affichable {
    private int $id;
    private string $titre;
    private string $description;
    private string $date_echeance;
    private string $statut;

    public function __construct(int $id, string $titre, string $description, string $date_echeance, string $statut) {
        $this->id = $id;
        $this->titre = $titre;
        $this->description = $description;
        $this->date_echeance = $date_echeance;
        $this->statut = $statut;
    }

    public function afficherDetails(): void {
        echo "Tâche #{$this->id}: {$this->titre}\nDescription: {$this->description}\nÉchéance: {$this->date_echeance}\nStatut: {$this->statut}\n";
    }
}
