<?php

namespace App\Filament\App\Resources\SoltemInstallationResource\Pages;

use App\Filament\App\Resources\SoltemInstallationResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditSoltemInstallation extends EditRecord
{
    protected static string $resource = SoltemInstallationResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
