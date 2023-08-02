<?php

namespace App\Livewire;

use App\Models\Patient;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class PatientTypeOverview extends BaseWidget
{

    protected function getHeaderWidgetsColumns(): int | array
    {
        return [
            'md' => 4,
            'xl' => 5,
        ];
    }

    public static function canView(): bool
    {
        return auth()->user()->isAdmin();
    }

    protected function getStats(): array
    {
        return [
            Stat::make('Cats', Patient::query()->where('type', 'cat')->count())->url('/'),
            Stat::make('Dogs', Patient::query()->where('type', 'dog')->count()),
            Stat::make('Rabbits', Patient::query()->where('type', 'rabbit')->count()),
        ];
    }
}
