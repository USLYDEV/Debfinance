<?php

namespace App\Filament\Resources\DatanetworkResource\Pages;

use App\Filament\Resources\DatanetworkResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditDatanetwork extends EditRecord
{
    protected static string $resource = DatanetworkResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}
