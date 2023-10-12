<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PieceResource\Pages;
use App\Filament\Resources\PieceResource\RelationManagers;
use App\Models\Piece;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Models\Bien;
use Filament\Tables\Columns\TextColumn;

class PieceResource extends Resource
{
    protected static ?string $model = Piece::class;

    protected static ?string $navigationIcon = 'heroicon-o-home';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
                Forms\Components\Select::make('bien_id')
                ->label('Bien')
                ->options(Bien::all()->pluck('nom_bien', 'id'))
                ->searchable()->required(),
                Forms\Components\Select::make('type_locatif')->options(
                    [
                        'appartement' => 'Appartement',
                        'chambre' => 'Chambre',
                        'terrain' => 'Terrain',
                    ]
                )->native(false)->required(),
                Forms\Components\TextInput::make('numero'),
                Forms\Components\TextInput::make('montant'),
                Forms\Components\TextInput::make('TOM'),
                Forms\Components\TextInput::make('salon')->required(),
                Forms\Components\TextInput::make('salle_eau')->required(),
                Forms\Components\TextInput::make('salle_de_bain')->required(),
                Forms\Components\TextInput::make('niveau_etage')->required(),
                Forms\Components\DatePicker::make('date_prise_en_charge'),
                Forms\Components\RichEditor::make('description'),
                Forms\Components\Select::make('statut')->options([
                    'disponible' => 'Disponible',
                    'Indisponible' => 'Indisponible'
                ])->native(false)
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //

                TextColumn::make('bien.nom_bien')->searchable()->sortable(),
                TextColumn::make('type_locatif')->searchable()->sortable(),
                TextColumn::make('bien.numero')->label('Numero')->searchable()->sortable(),
                TextColumn::make('bien.adresse')->searchable()->sortable(),
                TextColumn::make('montant')->searchable()->sortable(), 
                TextColumn::make('salon')->searchable()->sortable(),
                TextColumn::make('salle_eau')->label('Salle d\'eau')->searchable()->sortable(),
                TextColumn::make('salle_de_bain')->label('Salle de Bain')->searchable()->sortable(),
                TextColumn::make('chambre')->searchable()->sortable(),
                TextColumn::make('statut')->searchable()->sortable(),

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
            'index' => Pages\ListPieces::route('/'),
            'create' => Pages\CreatePiece::route('/create'),
            'view' => Pages\ViewPiece::route('/{record}'),
            'edit' => Pages\EditPiece::route('/{record}/edit'),
        ];
    }    
}
