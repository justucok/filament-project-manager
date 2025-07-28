<?php

namespace App\Filament\App\Widgets;

use App\Models\SoltemInstallation;
use App\Models\SoltemRequest;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class SoltemOverview extends BaseWidget
{
    protected static ?int $sort = 2;

    protected static ?string $title = "Soltem Request";

    protected function getStats(): array
    {
        return [
            Stat::make('Request Pending', fn() => SoltemRequest::where('status', 'pending')->count())
                ->description('Soltem Request still Pending')
                ->descriptionIcon('heroicon-m-bookmark')
                ->color('warning'),
            Stat::make('Request Approved', fn() => SoltemRequest::where('status', 'approved')->count())
                ->description('Soltems Request has Approved')
                ->descriptionIcon('heroicon-m-check-badge')
                ->color('success'),
            Stat::make('Request Rejected', fn() => SoltemRequest::where('status', 'rejected')->count())
                ->description('Soltem Request been Rejected')
                ->descriptionIcon('heroicon-m-no-symbol')
                ->color('danger'),
            Stat::make('Request Returned', fn() => SoltemRequest::where('status', 'returned')->count())
                ->description('Total Soltem has been Returned')
                ->descriptionIcon('heroicon-m-arrow-right-end-on-rectangle'),
            Stat::make('Soltem Installed', fn() => SoltemInstallation::query()->count())
                ->description('Total Soltem has been Installed')
                ->descriptionIcon('heroicon-m-arrow-trending-up')
                ->chart([7, 2, 10, 3, 15, 4, 17])
                ->color('primary'),
            // ...
        ];
    }
}
