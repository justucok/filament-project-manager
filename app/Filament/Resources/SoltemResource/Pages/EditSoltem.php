<?php

namespace App\Filament\Resources\SoltemResource\Pages;

use App\Filament\Resources\SoltemResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditSoltem extends EditRecord
{
    protected static string $resource = SoltemResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
