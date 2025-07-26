<?php

namespace App\Filament\Resources\SoltemInstallationResource\Pages;

use App\Filament\Resources\SoltemInstallationResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListSoltemInstallations extends ListRecords
{
    protected static string $resource = SoltemInstallationResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
