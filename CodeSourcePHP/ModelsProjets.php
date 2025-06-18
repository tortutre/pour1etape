<?php
namespace App\Models;

use App\Interfaces\Affichable;

class Projet implements Affichable {
    private int $id;
    private string $nom;
    private string $description;

    public function __construct(int $id, string $nom, string $description) {
        $this->id = $id;
        $this->nom = $nom;
        $this->description = $description;
    }

    public function afficherDetails(): void {
        echo "Projet #{$this->id}: {$this->nom}\nDescription: {$this->description}\n";
    }
}
