<?php

namespace App\Filament\Resources\LoanproductResource\Pages;

use App\Filament\Resources\LoanproductResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditLoanproduct extends EditRecord
{
    protected static string $resource = LoanproductResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}
