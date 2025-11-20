<?php

namespace App\Filament\Akademik\Resources\DataMaster\ProgramStudis\Pages;

use App\Filament\Akademik\Resources\DataMaster\ProgramStudis\ProgramStudiResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditProgramStudi extends EditRecord
{
    protected static string $resource = ProgramStudiResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
