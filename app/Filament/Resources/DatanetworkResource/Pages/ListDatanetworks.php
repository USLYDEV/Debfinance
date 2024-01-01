<?php

namespace App\Filament\Resources\DatanetworkResource\Pages;

use App\Filament\Resources\DatanetworkResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListDatanetworks extends ListRecords
{
    protected static string $resource = DatanetworkResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
