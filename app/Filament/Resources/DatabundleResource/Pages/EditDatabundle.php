<?php

namespace App\Filament\Resources\DatabundleResource\Pages;

use App\Filament\Resources\DatabundleResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditDatabundle extends EditRecord
{
    protected static string $resource = DatabundleResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}
