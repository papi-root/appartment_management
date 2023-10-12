<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProprietaireResource\Pages;
use App\Filament\Resources\ProprietaireResource\RelationManagers;
use App\Models\Proprietaire;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Tables\Columns\TextColumn;
use Filament\Notifications\Notification;

class ProprietaireResource extends Resource
{
    protected static ?string $model = Proprietaire::class;

    protected static ?string $navigationIcon = 'heroicon-o-user';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
                Forms\Components\TextInput::make('nom_complet')->required(),
                Forms\Components\TextInput::make('adresse')->required(),
                Forms\Components\TextInput::make('telephone'),
                Forms\Components\TextInput::make('email'),
                Forms\Components\TextInput::make('taux_commission_gerance'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
        ->query(Proprietaire::query())
            ->columns([
                //
                TextColumn::make('nom_complet')->searchable()->sortable(),
                TextColumn::make('adresse'),
                TextColumn::make('telephone'),
                TextColumn::make('email'),
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
            'index' => Pages\ListProprietaires::route('/'),
            'create' => Pages\CreateProprietaire::route('/create'),
            'view' => Pages\ViewProprietaire::route('/{record}'),
            'edit' => Pages\EditProprietaire::route('/{record}/edit'),
        ];
    }    

    protected function getCreatedNotification(): ?Notification
    {
        return Notification::make()
            ->success()
            ->title('Proprietaire ajoute')
            ->body('Proprietaire ajoute avec succee !');
    }
}
