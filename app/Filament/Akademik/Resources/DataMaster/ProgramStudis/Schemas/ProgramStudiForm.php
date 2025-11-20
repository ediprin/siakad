<?php

namespace App\Filament\Akademik\Resources\DataMaster\ProgramStudis\Schemas;

use App\Enums\JenjangStudi;
use Filament\Schemas\Schema;
use Illuminate\Validation\Rule;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\TextInput;

class ProgramStudiForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('fakultas_id')
                    ->label('Fakultas')
                    ->relationship('fakultas', 'nama') // pakai relasi di model
                    ->searchable()
                    ->preload()
                    ->required(),

                TextInput::make('kode')
                    ->label('Kode Prodi')
                    ->required()
                    ->maxLength(20)
                    ->unique(ignoreRecord: true),

                TextInput::make('nama')
                    ->label('Nama Program Studi')
                    ->required()
                    ->maxLength(255),

                TextInput::make('singkatan')
                    ->label('Singkatan')
                    ->maxLength(50),

                Select::make('jenjang')
                    ->label('Jenjang')
                    ->options(JenjangStudi::options())   // dari enum
                    ->required()
                    ->rules([
                        Rule::in(array_column(JenjangStudi::cases(), 'value')),
                    ]),

                Toggle::make('aktif')->label('Aktif')->default(true),
            ]);
    }
}
