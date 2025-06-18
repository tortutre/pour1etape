<?php
namespace App\Models;

class Utilisateur {
    private int $id;
    private string $nom;
    private string $email;

    public function __construct(int $id, string $nom, string $email) {
        $this->id = $id;
        $this->nom = $nom;
        $this->email = $email;
    }
}
