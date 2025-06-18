<?php
require_once 'vendor/autoload.php';

use App\Models\Tache;
use App\Models\Projet;
use App\Models\Utilisateur;
use App\Exceptions\TacheNonTrouveeException;

try {
    $tache = new Tache(1, "Corriger le bug", "Corriger le bug critique sur la page login", "2025-06-30", "en cours");
    $tache->afficherDetails();

    // Simuler erreur
    throw new TacheNonTrouveeException("Impossible de trouver la tâche avec ID 42");

} catch (TacheNonTrouveeException $e) {
    echo "Erreur : " . $e->getMessage();
}
