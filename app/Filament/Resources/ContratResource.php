<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ContratResource\Pages;
use App\Filament\Resources\ContratResource\RelationManagers;
use App\Models\Contrat;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Models\Locataire; 
use App\Models\Piece; 

class ContratResource extends Resource
{
    protected static ?string $model = Contrat::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
                Forms\Components\Select::make('locataire_id')
                ->label('Locataire')
                ->options(Locataire::all()->pluck('nom_complet', 'id'))
                ->searchable()->required(),
                Forms\Components\Select::make('espace_id')
                ->label('Espace')
                ->options(Piece::all()->pluck('type_locatif', 'id'))
                ->searchable()->required(),
                Forms\Components\TextInput::make('salle_de_bain')->required(),
                Forms\Components\DatePicker::make('debut_contrat'),
                Forms\Components\DatePicker::make(' fin_contrat'),
                Forms\Components\TextInput::make('statut')->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }
    
    public static function getRelations(): array
    {
        return [
            //
        ];
    }
    
    public static function getPages(): array
    {
        return [
            'index' => Pages\ListContrats::route('/'),
            'create' => Pages\CreateContrat::route('/create'),
            'view' => Pages\ViewContrat::route('/{record}'),
            'edit' => Pages\EditContrat::route('/{record}/edit'),
        ];
    }    
}
