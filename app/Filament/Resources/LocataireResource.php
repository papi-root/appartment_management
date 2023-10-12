<?php

namespace App\Filament\Resources;

use App\Filament\Resources\LocataireResource\Pages;
use App\Filament\Resources\LocataireResource\RelationManagers;
use App\Models\Locataire;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Tables\Columns\TextColumn;

class LocataireResource extends Resource
{
    protected static ?string $model = Locataire::class;

    protected static ?string $navigationIcon = 'heroicon-o-users';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
                Forms\Components\TextInput::make('nom_complet')->required(),
                Forms\Components\TextInput::make('telephone'),
                Forms\Components\TextInput::make('email'),
                Forms\Components\TextInput::make('fonction'),
                Forms\Components\TextInput::make('nci'),
                Forms\Components\TextInput::make('nom_complet_conjoint'),
                Forms\Components\TextInput::make('profession_conjoint'),
                Forms\Components\TextInput::make('telephone_conjoint'),
                Forms\Components\TextInput::make('adresse_conjoint'),
                Forms\Components\RichEditor::make('note'),
              
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
                TextColumn::make('nom_complet')->searchable()->sortable(),
                TextColumn::make('adresse'),
                TextColumn::make('telephone')->searchable()->sortable(),
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
            'index' => Pages\ListLocataires::route('/'),
            'create' => Pages\CreateLocataire::route('/create'),
            'view' => Pages\ViewLocataire::route('/{record}'),
            'edit' => Pages\EditLocataire::route('/{record}/edit'),
        ];
    }    
}
