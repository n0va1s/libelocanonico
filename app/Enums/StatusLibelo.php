<?php

namespace App\Enums;

enum StatusLibelo: string {
    case RASCUNHO = 'rascunho';
    case CONCLUIDO = 'concluido';
    case AGUARDANDO = 'aguardando';
    case NA_FILA = 'na_fila';
    case DEFERIDO = 'deferido';
    case INDEFERIDO = 'indeferido';

    public function label(): string {
        return match($this) {
            self::RASCUNHO => 'Em preenchimento',
            self::CONCLUIDO => 'Finalizado / Em análise',
            self::AGUARDANDO => 'Aguardando fila',
            self::NA_FILA => 'Em fila de espera',
            self::DEFERIDO => 'Deferido (Nulidade Confirmada)',
            self::INDEFERIDO => 'Indeferido (Não Confirmada)',
        };
    }

    public function color(): string {
        return match($this) {
            self::RASCUNHO => 'zinc',
            self::CONCLUIDO => 'indigo',
            self::AGUARDANDO => 'amber',
            self::NA_FILA => 'blue',
            self::DEFERIDO => 'green',
            self::INDEFERIDO => 'red',
        };
    }
}