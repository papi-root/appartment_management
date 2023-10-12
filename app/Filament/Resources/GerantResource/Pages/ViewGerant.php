<?php

namespace App\Filament\Resources\GerantResource\Pages;

use App\Filament\Resources\GerantResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewGerant extends ViewRecord
{
    protected static string $resource = GerantResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
