<?php

namespace App\Filament\Resources\LoanofficerResource\Pages;

use App\Filament\Resources\LoanofficerResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListLoanofficers extends ListRecords
{
    protected static string $resource = LoanofficerResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
