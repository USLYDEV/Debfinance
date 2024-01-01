<?php

namespace App\Filament\Resources\LoanproductResource\Pages;

use App\Filament\Resources\LoanproductResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListLoanproducts extends ListRecords
{
    protected static string $resource = LoanproductResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
