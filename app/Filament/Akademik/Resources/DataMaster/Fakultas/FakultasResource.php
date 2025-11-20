<?php

namespace App\Filament\Akademik\Resources\DataMaster\Fakultas;

use App\Filament\Akademik\Resources\DataMaster\Fakultas\Pages\CreateFakultas;
use App\Filament\Akademik\Resources\DataMaster\Fakultas\Pages\EditFakultas;
use App\Filament\Akademik\Resources\DataMaster\Fakultas\Pages\ListFakultas;
use App\Filament\Akademik\Resources\DataMaster\Fakultas\Schemas\FakultasForm;
use App\Filament\Akademik\Resources\DataMaster\Fakultas\Tables\FakultasTable;
use App\Models\Akademik\DataMaster\Fakultas;
use BackedEnum;
use UnitEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class FakultasResource extends Resource
{
    protected static ?string $model = Fakultas::class;
    protected static string|UnitEnum|null $navigationGroup = 'Data Master';
    protected static ?string $navigationLabel = 'Data Fakultas';
    protected static ?string $pluralLabel = 'Data Fakultas';
    protected static ?string $modelLabel = 'Fakultas';
    protected static string|BackedEnum|null $navigationIcon = Heroicon::BuildingOffice;
    protected static ?string $slug = 'data-master/fakultas';
    protected static ?string $recordTitleAttribute = 'Fakultas::class';
    protected static ?int $navigationSort = 1;

    public static function form(Schema $schema): Schema
    {
        return FakultasForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return FakultasTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListFakultas::route('/'),
            'create' => CreateFakultas::route('/create'),
            'edit' => EditFakultas::route('/{record}/edit'),
        ];
    }
}
