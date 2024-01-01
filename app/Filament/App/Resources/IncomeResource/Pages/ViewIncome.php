<?php

namespace App\Filament\App\Resources\IncomeResource\Pages;

use App\Filament\App\Resources\IncomeResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewIncome extends ViewRecord
{
    protected static string $resource = IncomeResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
