<?php

namespace App\Filament\App\Resources;

use App\Filament\App\Resources\SoltemRequestResource\Pages;
use App\Filament\App\Resources\SoltemRequestResource\RelationManagers;
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

    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    protected static ?string $navigationGroup = 'Soltem Management';

    protected static ?int $navigationSort = 1;


    public static function form(Form $form): Form
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
                            ->native(false)
                            ->default(now()->toDateString())
                            ->minDate(now()->toDateString())
                            ->closeOnDateSelection()
                            ->required(),
                        Forms\Components\Textarea::make('notes')
                            ->columnSpanFull(),
                    ])->columns(2),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('request_number')
                    ->sortable()
                    ->searchable(),
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
