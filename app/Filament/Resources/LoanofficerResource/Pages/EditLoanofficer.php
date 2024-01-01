<?php

namespace App\Filament\Resources\LoanofficerResource\Pages;

use App\Filament\Resources\LoanofficerResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditLoanofficer extends EditRecord
{
    protected static string $resource = LoanofficerResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}
