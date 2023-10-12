<?php

namespace App\Filament\Resources\ProprietaireResource\Pages;

use App\Filament\Resources\ProprietaireResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateProprietaire extends CreateRecord
{
    protected static string $resource = ProprietaireResource::class;
    protected static ?string $recordNomCompletAttribute = 'nom_complet';
    protected static ?string $recordTelephoneAttribute = 'telephone';
    protected static ?string $recordAdresseAttribute = 'adresse';

  
}
