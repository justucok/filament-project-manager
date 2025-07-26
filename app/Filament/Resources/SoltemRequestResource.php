<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SoltemRequestResource\Pages;
use App\Filament\Resources\SoltemRequestResource\RelationManagers;
use App\Models\SoltemRequest;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class SoltemRequestResource extends Resource
{
    protected static ?string $model = SoltemRequest::class;

    protected static ?string $navigationIcon = 'heroicon-o-document-duplicate';

    protected static ?string $navigationGroup = 'Master Data Management';


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
            'index' => Pages\ListSoltemRequests::route('/'),
            'create' => Pages\CreateSoltemRequest::route('/create'),
            'edit' => Pages\EditSoltemRequest::route('/{record}/edit'),
        ];
    }
}
