<?php

namespace App\Filament\Resources\SoltemResource\Pages;

use App\Filament\Resources\SoltemResource;
use App\Models\Soltem;
use Filament\Actions;
use Filament\Resources\Components\Tab;
use Filament\Resources\Pages\ListRecords;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\Log;

class ListSoltems extends ListRecords
{
    protected static string $resource = SoltemResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }

    public function getTabs(): array
    {
        return [
            'all' => Tab::make()
            ->badge(fn() => Soltem::count()),

            'ready' => Tab::make()
            ->modifyQueryUsing(fn() => Soltem::where('status', 'ready'))
            ->badge(fn() => Soltem::where('status', 'ready')->count()),

            'out' => Tab::make()
            ->modifyQueryUsing(fn() => Soltem::where('status', 'out'))
            ->badge(fn() => Soltem::where('status', 'out')->count()),

            'used' => Tab::make()
            ->modifyQueryUsing(fn() => Soltem::where('status', 'used'))
            ->badge(fn() => Soltem::where('status', 'used')->count()),
        ];
    }
}
