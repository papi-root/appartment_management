<?php

namespace App\Filament\Resources\PieceResource\Pages;

use App\Filament\Resources\PieceResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewPiece extends ViewRecord
{
    protected static string $resource = PieceResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
