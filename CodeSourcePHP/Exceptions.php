<?php
namespace App\Exceptions;

use Exception;

class TacheNonTrouveeException extends Exception {
    public function __construct($message = "Tâche non trouvée", $code = 0, Exception $previous = null) {
        parent::__construct($message, $code, $previous);
    }
}
