<?php

namespace App\Filament\Resources\SoltemInstallationResource\Pages;

use App\Filament\Resources\SoltemInstallationResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewSoltemInstallation extends ViewRecord
{
    protected static string $resource = SoltemInstallationResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
