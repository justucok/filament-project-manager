<?php

namespace App\Filament\Resources\SoltemRequestResource\Pages;

use App\Filament\Resources\SoltemRequestResource;
use App\Models\SoltemRequest;
use Filament\Actions;
use Filament\Resources\Components\Tab;
use Filament\Resources\Pages\ListRecords;

class ListSoltemRequests extends ListRecords
{
    protected static string $resource = SoltemRequestResource::class;

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
                ->badge(fn() => SoltemRequest::count()),

            'pending' => Tab::make()
                ->modifyQueryUsing(fn() => SoltemRequest::where('status', 'pending'))
                ->badge(fn() => SoltemRequest::where('status', 'pending')->count()),

            'approved' => Tab::make()
                ->modifyQueryUsing(fn() => SoltemRequest::where('status', 'approved'))
                ->badge(fn() => SoltemRequest::where('status', 'approved')->count()),

            'rejected' => Tab::make()
                ->modifyQueryUsing(fn() => SoltemRequest::where('status', 'rejected'))
                ->badge(fn() => SoltemRequest::where('status', 'rejected')->count()),
            'returned' => Tab::make()
                ->modifyQueryUsing(fn() => SoltemRequest::where('status', 'returned'))
                ->badge(fn() => SoltemRequest::where('status', 'returned')->count()),
        ];
    }
}
