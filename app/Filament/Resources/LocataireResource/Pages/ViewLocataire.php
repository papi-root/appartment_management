<?php

namespace App\Filament\Resources\LocataireResource\Pages;

use App\Filament\Resources\LocataireResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewLocataire extends ViewRecord
{
    protected static string $resource = LocataireResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
