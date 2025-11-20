<?php

namespace App\Enums;

enum JenjangStudi: string
{
    case D3 = 'D3';
    case S1 = 'S1';
    case S2 = 'S2';
    case S3 = 'S3';
    case PROFESI = 'Profesi';

    public function label(): string
    {
        return match ($this) {
            self::D3 => 'Diploma 3 (D3)',
            self::S1 => 'Sarjana (S1)',
            self::S2 => 'Magister (S2)',
            self::S3 => 'Doktor (S3)',
            self::PROFESI => 'Profesi',
        };
    }

    public static function options(): array
    {
        return collect(self::cases())
            ->mapWithKeys(fn($case) => [$case->value => $case->label()])
            ->toArray();
    }
}
