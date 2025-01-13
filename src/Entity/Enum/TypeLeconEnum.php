<?php

namespace App\Entity\Enum;
enum TypeLeconEnum: string {
    case VIDEO = 'video';
    case TEXTE = 'texte';
    case PDF = 'pdf';

    public function toString(): string {
        return $this->name; 
    }
}