<?php

namespace App\Enums;

enum TiposGrupo: string
{
    case PASTORAL = 'pastoral familiar';
    case ECC = 'encontro de casais com cristo';
    case MOVIMENTO = 'movimento paroquial';
    case ORACAO = 'grupo de oração';

    public function label(): string
    {
        return match ($this) {
            self::PASTORAL => 'Pastoral Familiar',
            self::ECC => 'Encontro de Casais com Cristo',
            self::MOVIMENTO => 'Movimento Paroquial',
            self::ORACAO => 'Grupo de Oração',
        };
    }

    public function color(): string
    {
        return match ($this) {
            self::PASTORAL => 'zinc',
            self::ECC => 'blue',
            self::MOVIMENTO => 'green',
            self::ORACAO => 'red',
        };
    }
}
