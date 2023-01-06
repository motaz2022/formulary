<?php

namespace App\Filament\Resources\DrugStatsResource\Widgets;

use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Card;
use App\Models\Drug;

class StatsOverview extends BaseWidget
{
    protected function getCards(): array
    {
        return [
            Card::make('Brand Name', Drug::all()->count()),
            Card::make('Availabilty', Drug::where('availability', '1')->count())
        ];
    }
}
