<?php

namespace App\Filament\Resources\DatabundleResource\Pages;

use App\Filament\Resources\DatabundleResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListDatabundles extends ListRecords
{
    protected static string $resource = DatabundleResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
