<?php

namespace App\Filament\Resources;

use App\Filament\Resources\GerantResource\Pages;
use App\Filament\Resources\GerantResource\RelationManagers;
use App\Models\Gerant;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class GerantResource extends Resource
{
    protected static ?string $model = Gerant::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
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
            'index' => Pages\ListGerants::route('/'),
            'create' => Pages\CreateGerant::route('/create'),
            'view' => Pages\ViewGerant::route('/{record}'),
            'edit' => Pages\EditGerant::route('/{record}/edit'),
        ];
    }    
}
