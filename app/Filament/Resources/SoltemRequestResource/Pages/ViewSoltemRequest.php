<?php

namespace App\Filament\Resources\SoltemRequestResource\Pages;

use App\Filament\Resources\SoltemRequestResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewSoltemRequest extends ViewRecord
{
    protected static string $resource = SoltemRequestResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
