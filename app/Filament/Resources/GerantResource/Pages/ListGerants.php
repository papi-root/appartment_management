<?php

namespace App\Filament\Resources\GerantResource\Pages;

use App\Filament\Resources\GerantResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListGerants extends ListRecords
{
    protected static string $resource = GerantResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
