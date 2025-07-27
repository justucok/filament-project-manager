<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SoltemResource\Pages;
use App\Filament\Resources\SoltemResource\RelationManagers;
use App\Filament\Resources\SoltemResource\RelationManagers\SoltemInstallationRelationManager;
use App\Filament\Resources\SoltemResource\RelationManagers\SoltemRequestRelationManager;
use App\Models\Soltem;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Tables\Columns\SelectColumn;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class SoltemResource extends Resource
{
    protected static ?string $model = Soltem::class;

    protected static ?string $navigationIcon = 'heroicon-o-circle-stack';

    protected static ?string $navigationGroup = 'Master Data Management';

    protected static ?string $navigationLabel = 'Master data Soltem';

    protected static ?int $navigationSort = 1;

    public static function getNavigationBadge(): ?string
    {
        return static::getModel()::count();
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make('Soltem Information')
                    ->description('Please fill in the soltem details.')
                    ->schema([
                        Forms\Components\TextInput::make('name')
                            ->required()
                            ->columnSpanFull()
                            ->maxLength(255),
                        Forms\Components\TextInput::make('cpe_type')
                            ->maxLength(255),
                        Forms\Components\TextInput::make('cpe_registration')
                            ->maxLength(255),
                        Forms\Components\TextInput::make('modem_type')
                            ->maxLength(255),
                        Forms\Components\TextInput::make('modem_registration')
                            ->maxLength(255),
                    ])->columns(2),
                Forms\Components\Section::make('Quota Information')
                    ->description('Please fill in the quota and sim details.')
                    ->schema([
                        Forms\Components\TextInput::make('gsm_number')
                            ->numeric(),
                        Forms\Components\TextInput::make('data_quota')
                            ->maxLength(255),
                        Forms\Components\DatePicker::make('quota_expiry_date')
                            ->native(false),
                        Forms\Components\DatePicker::make('sim_expiry_date')
                            ->native(false),
                    ])->columns(2),
                Forms\Components\Section::make('Status Information')
                    ->description('Please fill in the status details.')
                    ->schema([
                        Forms\Components\Select::make('status')
                            ->options([
                                'ready' => 'ready',
                                'out' => 'out',
                                'used' => 'used',
                            ])
                            ->default('ready')
                            ->native(false)
                            ->required()
                            ->disabled(fn($livewire) => $livewire instanceof \Filament\Resources\Pages\CreateRecord)
                            ->columnSpanFull(),
                        Forms\Components\Textarea::make('notes')
                            ->columnSpanFull(),
                    ])->columns(2),

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('cpe_type')
                    ->searchable(),
                Tables\Columns\TextColumn::make('cpe_registration')
                    ->searchable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('modem_type')
                    ->searchable(),
                Tables\Columns\TextColumn::make('modem_registration')
                    ->searchable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('gsm_number')
                    ->searchable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('data_quota')
                    ->searchable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('quota_expiry_date')
                    ->date()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('sim_expiry_date')
                    ->date()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                // Tables\Columns\SelectColumn::make('status')
                //     ->selectablePlaceholder(false)
                //     ->options([
                //         'ready',
                //         'out',
                //         'used',
                //     ]),
                Tables\Columns\TextColumn::make('status')
                    ->badge()
                    ->color(fn(string $state): string => match ($state) {
                        'ready' => 'success',
                        'out' => 'danger',
                        'used' => 'gray',
                    }),
                Tables\Columns\TextColumn::make('notes')
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('created_at')
                    ->numeric()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->numeric()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ActionGroup::make([
                    Tables\Actions\ViewAction::make(),
                    Tables\Actions\EditAction::make(),
                ]),
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
            SoltemRequestRelationManager::class,
            SoltemInstallationRelationManager::class
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListSoltems::route('/'),
            'create' => Pages\CreateSoltem::route('/create'),
            'view' => Pages\ViewSoltem::route('/{record}'),
            'edit' => Pages\EditSoltem::route('/{record}/edit'),
        ];
    }
}
