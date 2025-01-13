<?php

namespace App\Entity\Enum;
enum NiveauCoursEnum: string {
    case DEBUTANT = 'debutant';
    case INTERMEDIAIRE = 'intermediaire';
    case AVANCE = 'avance';

    public function toString(): string {
        return $this->value; 
    }
}