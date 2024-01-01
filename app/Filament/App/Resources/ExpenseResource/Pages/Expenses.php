<?php

namespace App\Filament\App\Resources\ExpenseResource\Pages;

use App\Filament\App\Resources\ExpenseResource;
use Filament\Actions;
use Filament\Resources\Pages\ManageRecords;

class Expenses extends ManageRecords
{
    protected static string $resource = ExpenseResource::class;
}
