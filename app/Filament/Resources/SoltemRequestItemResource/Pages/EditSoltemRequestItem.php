<?php

namespace App\Filament\Resources\SoltemRequestItemResource\Pages;

use App\Filament\Resources\SoltemRequestItemResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditSoltemRequestItem extends EditRecord
{
    protected static string $resource = SoltemRequestItemResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
