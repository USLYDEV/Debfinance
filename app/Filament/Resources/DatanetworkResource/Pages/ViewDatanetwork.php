<?php

namespace App\Filament\Resources\DatanetworkResource\Pages;

use App\Filament\Resources\DatanetworkResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewDatanetwork extends ViewRecord
{
    protected static string $resource = DatanetworkResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
