<?php

namespace App\Filament\Resources;

use App\Filament\Resources\BienResource\Pages;
use App\Filament\Resources\BienResource\RelationManagers;
use App\Models\Bien;
use App\Models\Proprietaire;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Tables\Columns\TextColumn;

class BienResource extends Resource
{
    protected static ?string $model = Bien::class;

    protected static ?string $navigationIcon = 'heroicon-o-home-modern';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
                Forms\Components\Select::make('proprietaire_id')
                ->label('Proprietaire')
                ->relationship('proprietaire', 'nom_complet')
                ->searchable()->required(),
                Forms\Components\Select::make('type_bien')->options(
                    [
                        'immeuble' => 'Immeuble',
                        'maison' => 'Maison',
                        'terrain' => 'Terrain',
                    ]
                )->native(false)->required(),
                Forms\Components\TextInput::make('numero'),
                Forms\Components\TextInput::make('nom_bien'),
                Forms\Components\DatePicker::make('date_contruction'),
                Forms\Components\TextInput::make('adresse')->required(),
                Forms\Components\DatePicker::make('date_prise_en_charge'),
                Forms\Components\RichEditor::make('caracteristiques'),
                Forms\Components\TextInput::make('lot')
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
                TextColumn::make('proprietaire.nom_complet')->searchable()->sortable(),
                TextColumn::make('type_bien')->searchable()->sortable(),
                TextColumn::make('numero')->searchable()->sortable(),
                TextColumn::make('nom_bien')->searchable()->sortable(),
                TextColumn::make('adresse')->searchable()->sortable(),
                TextColumn::make('lot')->searchable()->sortable(),
            ])
            ->filters([ 
                //
            ])
            ->actions([
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
            'index' => Pages\ListBiens::route('/'),
            'create' => Pages\CreateBien::route('/create'),
            'edit' => Pages\EditBien::route('/{record}/edit'),
        ];
    }    
}
