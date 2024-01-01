<?php

namespace App\Filament\Resources\LoanproductResource\Pages;

use App\Filament\Resources\LoanproductResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewLoanproduct extends ViewRecord
{
    protected static string $resource = LoanproductResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
