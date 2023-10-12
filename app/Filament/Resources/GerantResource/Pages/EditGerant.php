<?php

namespace App\Filament\Resources\GerantResource\Pages;

use App\Filament\Resources\GerantResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditGerant extends EditRecord
{
    protected static string $resource = GerantResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}
