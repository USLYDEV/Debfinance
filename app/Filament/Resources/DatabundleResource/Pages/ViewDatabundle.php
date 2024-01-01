<?php

namespace App\Filament\Resources\DatabundleResource\Pages;

use App\Filament\Resources\DatabundleResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewDatabundle extends ViewRecord
{
    protected static string $resource = DatabundleResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
