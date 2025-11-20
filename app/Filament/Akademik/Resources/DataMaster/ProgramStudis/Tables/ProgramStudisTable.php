<?php

namespace App\Filament\Akademik\Resources\DataMaster\ProgramStudis\Tables;

use Filament\Tables\Table;
use App\Enums\JenjangStudi;
use Filament\Actions\EditAction;
use Filament\Actions\DeleteAction;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Filters\TernaryFilter;

class ProgramStudisTable
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
                    ->label('Nama Program Studi')
                    ->searchable()
                    ->sortable(),

                TextColumn::make('jenjang')
                    ->label('Jenjang')
                    ->formatStateUsing(fn(JenjangStudi $state) => $state->label()),

                TextColumn::make('fakultas.nama')
                    ->label('Fakultas')
                    ->sortable()
                    ->searchable(),

                IconColumn::make('aktif')
                    ->label('Aktif')
                    ->boolean(),
            ])
            ->filters([
                SelectFilter::make('fakultas')
                    ->relationship('fakultas', 'nama')
                    ->label('Fakultas'),

                SelectFilter::make('jenjang')
                    ->options([
                        'D3' => 'D3',
                        'S1' => 'S1',
                        'S2' => 'S2',
                        'S3' => 'S3',
                    ])
                    ->label('Filter Jenjang'),

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
