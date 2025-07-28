<?php

namespace App\Filament\App\Resources\SoltemRequestResource\Pages;

use App\Filament\App\Resources\SoltemRequestResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditSoltemRequest extends EditRecord
{
    protected static string $resource = SoltemRequestResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
