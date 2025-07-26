<?php

namespace App\Filament\Resources\SoltemInstallationResource\Pages;

use App\Filament\Resources\SoltemInstallationResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditSoltemInstallation extends EditRecord
{
    protected static string $resource = SoltemInstallationResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}
