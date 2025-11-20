<?php

namespace App\Filament\Akademik\Resources\DataMaster\Fakultas\Tables;

use Filament\Tables\Table;
use Filament\Actions\EditAction;
use Filament\Actions\DeleteAction;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\TernaryFilter;

class FakultasTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('kode')
                    ->label('Kode')
                    ->searchable()
                    ->sortable(),

                TextColumn::make('nama')
                    ->label('Nama Fakultas')
                    ->searchable()
                    ->sortable(),

                TextColumn::make('singkatan')
                    ->label('Singkatan')
                    ->toggleable(isToggledHiddenByDefault: true),

                IconColumn::make('aktif')
                    ->label('Aktif')
                    ->boolean(),
            ])
            ->filters([
                TernaryFilter::make('aktif')
                    ->label('Status Aktif'),
            ])
            ->recordActions([
                EditAction::make(),
                DeleteAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
