<?php

namespace App\Filament\Resources\ProprietaireResource\Pages;

use App\Filament\Resources\ProprietaireResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewProprietaire extends ViewRecord
{
    protected static string $resource = ProprietaireResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
