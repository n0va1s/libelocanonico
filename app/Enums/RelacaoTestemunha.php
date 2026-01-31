<?php

namespace App\Enums;

enum RelacaoTestemunha: string
{
    case FAMILIAR = 'familiar';
    case AMIGO = 'amigo';
    case PADRINHO = 'padrinho';
    case OUTRO = 'outro';

    public function label(): string
    {
        return match ($this) {
            self::FAMILIAR => 'Familiar Próximo',
            self::AMIGO => 'Amigo Íntimo',
            self::PADRINHO => 'Padrinho de Casamento',
            self::OUTRO => 'Outros',
        };
    }
}
