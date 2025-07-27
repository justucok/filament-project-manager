<?php

namespace App\Filament\App\Resources;

use App\Filament\App\Resources\SoltemInstallationResource\Pages;
use App\Filament\App\Resources\SoltemInstallationResource\RelationManagers;
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

    protected static ?string $navigationIcon = 'heroicon-o-document-check';

    protected static ?string $navigationGroup = 'Soltem Management';

    protected static ?int $navigationSort = 2;



    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make('Project Information')
                    ->description('Please fill in the project ticket details.')
                    ->schema([
                        Forms\Components\Select::make('employee_id')
                            ->relationship('employee', 'first_name')
                            ->native(false)
                            ->preload()
                            ->required(),
                        Forms\Components\Select::make('soltem_request_id')
                            ->relationship(
                                'soltemRequest',
                                'request_number',
                                fn($query) => $query
                                    ->where('status', 'approved')
                                    ->whereHas('soltem', fn($q) => $q->where('status', 'out'))
                            )
                            ->native(false)
                            ->preload()
                            ->required(),
                        Forms\Components\TextInput::make('ticket_project')
                            ->numeric()
                            ->required()
                            ->maxLength(255),
                        Forms\Components\TextInput::make('client_name')
                            ->required()
                            ->maxLength(255),
                        Forms\Components\TextInput::make('case_number')
                            ->numeric()          // Case number for the installation
                            ->maxLength(255),
                        Forms\Components\Select::make('category')                // Category of the installation
                            ->options([
                                'installation' => 'Installation',
                                'maintenance' => 'Maintenance',
                                'upgrade' => 'Upgrade',
                                'other' => 'Other',
                            ]),
                    ])->columns(2),
                Forms\Components\Section::make('Installation Information')
                    ->description('Please fill in the installation details.')
                    ->schema([
                        Forms\Components\DatePicker::make('installation_date')
                            ->native(false)
                            ->required(),
                        Forms\Components\TextInput::make('access')
                            ->required(),                                                   // Access details for the installation
                        Forms\Components\Textarea::make('installation_address')
                            ->required()
                            ->columnSpanFull(),
                        Forms\Components\TextInput::make('pic_name')
                            ->maxLength(255),
                        Forms\Components\TextInput::make('pic_contact')
                            ->maxLength(255),
                        Forms\Components\Textarea::make('complaint')
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
                Tables\Columns\TextColumn::make('installation_number')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('employee.first_name')
                    ->sortable(),
                Tables\Columns\TextColumn::make('soltemRequest.request_number')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('ticket_project')
                    ->searchable(),
                Tables\Columns\TextColumn::make('soltemRequest.soltem.name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('client_name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('installation_date')
                    ->date()
                    ->sortable(),
                Tables\Columns\TextColumn::make('case_number')
                    ->searchable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('category')
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('access')
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('pic_name')
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('pic_contact')
                    ->toggleable(isToggledHiddenByDefault: true),
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
            'index' => Pages\ListSoltemInstallations::route('/'),
            'create' => Pages\CreateSoltemInstallation::route('/create'),
            'edit' => Pages\EditSoltemInstallation::route('/{record}/edit'),
        ];
    }
}
