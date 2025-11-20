<?php

namespace App\Filament\Akademik\Resources\DataMaster\ProgramStudis;

use App\Filament\Akademik\Resources\DataMaster\ProgramStudis\Pages\CreateProgramStudi;
use App\Filament\Akademik\Resources\DataMaster\ProgramStudis\Pages\EditProgramStudi;
use App\Filament\Akademik\Resources\DataMaster\ProgramStudis\Pages\ListProgramStudis;
use App\Filament\Akademik\Resources\DataMaster\ProgramStudis\Schemas\ProgramStudiForm;
use App\Filament\Akademik\Resources\DataMaster\ProgramStudis\Tables\ProgramStudisTable;
use App\Models\Akademik\DataMaster\ProgramStudi;
use BackedEnum;
use UnitEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class ProgramStudiResource extends Resource
{
    protected static ?string $model = ProgramStudi::class;
    protected static string|UnitEnum|null $navigationGroup = 'Data Master';
    protected static ?string $navigationLabel = 'Data Program Studi';
    protected static ?string $pluralLabel = 'Data Program Studi';
    protected static ?string $modelLabel = 'Program Studi';
    protected static string|BackedEnum|null $navigationIcon = Heroicon::AcademicCap;
    protected static ?string $slug = 'data-master/program-studi';
    protected static ?string $recordTitleAttribute = 'ProgramStudi::class';
    protected static ?int $navigationSort = 2;

    public static function form(Schema $schema): Schema
    {
        return ProgramStudiForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return ProgramStudisTable::configure($table);
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
            'index' => ListProgramStudis::route('/'),
            'create' => CreateProgramStudi::route('/create'),
            'edit' => EditProgramStudi::route('/{record}/edit'),
        ];
    }
}
