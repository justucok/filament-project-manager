<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SoltemInstallationResource\Pages;
use App\Filament\Resources\SoltemInstallationResource\RelationManagers;
use App\Models\SoltemInstallation;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class SoltemInstallationResource extends Resource
{
    protected static ?string $model = SoltemInstallation::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('employee_id')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('soltem_id')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('ticket_project')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('client_name')
                    ->required()
                    ->maxLength(255),
                Forms\Components\DatePicker::make('installation_date')
                    ->required(),
                Forms\Components\Textarea::make('installation_address')
                    ->required()
                    ->columnSpanFull(),
                Forms\Components\TextInput::make('case_number')
                    ->maxLength(255),
                Forms\Components\TextInput::make('category')
                    ->maxLength(255),
                Forms\Components\TextInput::make('access')
                    ->maxLength(255),
                Forms\Components\TextInput::make('pic_name')
                    ->maxLength(255),
                Forms\Components\TextInput::make('pic_contact')
                    ->maxLength(255),
                Forms\Components\Textarea::make('complaint')
                    ->columnSpanFull(),
                Forms\Components\Textarea::make('notes')
                    ->columnSpanFull(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('employee_id')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('soltem_id')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('ticket_project')
                    ->searchable(),
                Tables\Columns\TextColumn::make('client_name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('installation_date')
                    ->date()
                    ->sortable(),
                Tables\Columns\TextColumn::make('case_number')
                    ->searchable(),
                Tables\Columns\TextColumn::make('category')
                    ->searchable(),
                Tables\Columns\TextColumn::make('access')
                    ->searchable(),
                Tables\Columns\TextColumn::make('pic_name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('pic_contact')
                    ->searchable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
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
            'index' => Pages\ListSoltemInstallations::route('/'),
            'create' => Pages\CreateSoltemInstallation::route('/create'),
            'view' => Pages\ViewSoltemInstallation::route('/{record}'),
            'edit' => Pages\EditSoltemInstallation::route('/{record}/edit'),
        ];
    }
}
