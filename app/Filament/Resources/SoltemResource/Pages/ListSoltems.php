<?php

namespace App\Filament\Resources\SoltemResource\Pages;

use App\Filament\Resources\SoltemResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListSoltems extends ListRecords
{
    protected static string $resource = SoltemResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
