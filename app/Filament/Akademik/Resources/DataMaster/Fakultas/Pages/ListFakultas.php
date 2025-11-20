<?php

namespace App\Filament\Akademik\Resources\DataMaster\Fakultas\Pages;

use App\Filament\Akademik\Resources\DataMaster\Fakultas\FakultasResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListFakultas extends ListRecords
{
    protected static string $resource = FakultasResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
