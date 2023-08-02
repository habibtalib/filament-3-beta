<?php

namespace App\Filament\Pages;

use Filament\Pages\Page;
use Filament\Actions\Action;
use App\Livewire\LatestOrders;
use App\Livewire\TreatmentsChart;
use App\Livewire\PatientTypeOverview;

class Settings extends Page
{
    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    protected static string $view = 'filament.pages.settings';

    // protected ?string $heading = 'Settings';

    public function getHeading(): string
    {
        return __('Settings');
    }

    public function getSubheading(): ?string
    {
        return __('Custom Page Subheading');
    }

    public function getContentMaxWidth(): ?string
    {
        return 'full';
    }

    protected static ?string $navigationLabel = 'Settings';

    public static function shouldRegisterNavigation(): bool
    {
        // return auth()->user()->canManageSettings();
        return true;
    }

    public function mount(): void
    {
        // abort_unless(auth()->user()->canManageSettings(), 403);
        // abort(403);
    }

    protected function getHeaderWidgets(): array
    {
        return [
            PatientTypeOverview::class,
            TreatmentsChart::class,
            LatestOrders::class
        ];
    }

    // protected function getHeaderActions(): array
    // {
    // return [
    // Action::make('edit'),
    // Action::make('delete')
    //     ->requiresConfirmation(),
    // Action::make('approve')
    //     ->action(function () {
    // $this->getRecord()->approve();

    // $this->refreshFormData([
    //     'status',
    // ]);
    //         })
    // ];
    // }
}
