<?php

namespace App\Filament\Akademik\Resources\DataMaster\Fakultas\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\TextInput;

class FakultasForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('kode')
                    ->label('Kode Fakultas')
                    ->required()
                    ->maxLength(20)
                    ->unique(ignoreRecord: true),

                TextInput::make('nama')
                    ->label('Nama Fakultas')
                    ->required()
                    ->maxLength(255),

                TextInput::make('singkatan')
                    ->label('Singkatan')
                    ->maxLength(50),

                Toggle::make('aktif')
                    ->label('Aktif')
                    ->default(true),
            ]);
    }
}
