<?php

namespace App\Filament\Widgets;

use App\Models\Soltem;
use Filament\Widgets\ChartWidget;
use Flowframe\Trend\Trend;
use Flowframe\Trend\TrendValue;
use phpDocumentor\Reflection\Types\Boolean;

class SoltemsChart extends ChartWidget
{
    protected static ?string $heading = 'Soltems Chart';

    protected static ?int $sort = 2;

    protected static string $color = 'info';

    protected static ?string $description = 'Preview all Soltem data';

    public ?string $filter = 'ready';

    protected function getFilters(): ?array
    {
        return [
            'ready' => 'Ready to use',
            'out' => 'Out',
            'used' => 'Has been used',
        ];
    }

    protected function getData(): array
    {
        $activeFilter = $this->filter;

        $query = Soltem::query();

        // Jika filter dipilih, filter berdasarkan status
        if ($activeFilter) {
            $query->where('status', $activeFilter);
        }

        $data = Trend::query($query)
            ->between(
                start: now()->startOfMonth(),
                end: now()->endOfMonth(),
            )
            ->perWeek()
            ->count();

        return [
            'datasets' => [
                [
                    'label' => $activeFilter ? ucfirst($activeFilter) : 'All Status',
                    'data' => $data->map(fn(TrendValue $value) => $value->aggregate),
                ],
            ],
            'labels' => $data->map(fn(TrendValue $value) => $value->date),
        ];
    }

    protected function getType(): string
    {
        return 'bar';
    }
}
