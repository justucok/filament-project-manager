<?php

namespace App\Filament\Resources\SoltemResource\RelationManagers;

use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class SoltemRequestRelationManager extends RelationManager
{
    protected static string $relationship = 'SoltemRequest';

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make('Project Information')
                    ->description('Please fill in the project ticket details.')
                    ->schema([
                        Forms\Components\TextInput::make('ticket_number')
                            ->required()
                            ->maxLength(255),
                        Forms\Components\TextInput::make('client_name')
                            ->required()
                            ->maxLength(255),
                    ])->columns(2),
                Forms\Components\Section::make('Select Soltem')
                    ->schema([
                        Forms\Components\Select::make('soltem_id')
                            ->relationship('soltem', 'name', fn($query) => $query->where('status', 'ready'))
                            ->preload()
                            ->searchable()
                            ->required()
                            ->columnSpanFull(),
                    ]),
                Forms\Components\Section::make('Request Information')
                    ->description('Please fill in the project ticket details.')
                    ->schema([
                        Forms\Components\Select::make('employee_id')
                            ->relationship('employee', 'first_name')
                            ->preload()
                            ->searchable()
                            ->required(),
                        Forms\Components\DatePicker::make('request_date')
                            ->required(),
                        Forms\Components\Textarea::make('notes')
                            ->columnSpanFull(),
                    ])->columns(2),
            ]);
    }

    public function table(Table $table): Table
    {
        return $table
            ->recordTitleAttribute('request_number')
            ->columns([
                Tables\Columns\TextColumn::make('employee.first_name'),
                Tables\Columns\TextColumn::make('ticket_number')
                    ->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('client_name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('soltem.name')
                    ->sortable(),
                Tables\Columns\TextColumn::make('request_date')
                    ->date()
                    ->sortable(),
                Tables\Columns\TextColumn::make('status')
                    ->badge()
                    ->color(fn(string $state): string => match ($state) {
                        'approved' => 'success',
                        'rejected' => 'danger',
                        'pending' => 'gray',
                    }),
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
            ->headerActions([
                // Tables\Actions\CreateAction::make(),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }
}
