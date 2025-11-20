<?php

namespace App\Filament\Akademik\Resources\DataMaster\Fakultas\Pages;

use App\Filament\Akademik\Resources\DataMaster\Fakultas\FakultasResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditFakultas extends EditRecord
{
    protected static string $resource = FakultasResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
