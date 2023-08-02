<?php

namespace App\Filament\Resources\PatientResource\Pages;

use Filament\Actions;
use App\Livewire\TreatmentsChart;
use App\Livewire\PatientTypeOverview;
use Filament\Resources\Pages\ListRecords;
use App\Filament\Resources\PatientResource;

class ListPatients extends ListRecords
{
    protected static string $resource = PatientResource::class;

    protected function getHeaderWidgets(): array
    {
        return [
            PatientTypeOverview::class
        ];
    }

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
