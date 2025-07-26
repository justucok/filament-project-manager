<?php

namespace App\Filament\Resources\SoltemResource\Pages;

use App\Filament\Resources\SoltemResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewSoltem extends ViewRecord
{
    protected static string $resource = SoltemResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
