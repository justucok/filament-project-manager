<?php

namespace App\Filament\Resources;

use App\Filament\Resources\EmployeeResource\Pages;
use App\Filament\Resources\EmployeeResource\RelationManagers;
use App\Models\Department;
use App\Models\Employee;
use App\Models\Position;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Forms\Get;
use Filament\Forms\Set;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class EmployeeResource extends Resource
{
    protected static ?string $model = Employee::class;

    protected static ?string $navigationIcon = 'heroicon-o-user-group';

    protected static ?string $navigationGroup = 'Employee Management';

    public static function getNavigationBadge(): ?string
    {
        return static::getModel()::count() - 1;
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make('Employee Information')
                    ->description('Please fill in the employee details.')
                    ->schema([
                        Forms\Components\Select::make('department_id')
                            ->relationship('department', 'name')
                            ->required()
                            ->native(false)
                            ->live()
                            ->afterStateUpdated(fn(Set $set) => $set('position_id', null)),
                        Forms\Components\Select::make('position_id')
                            ->options(fn(Get $get) => Position::query() // Get position based on department id
                                ->where('department_id', $get('department_id'))
                                ->pluck('name', 'id'))
                            ->native(false)
                            ->searchable()
                            ->preload()
                            ->live()
                            ->required(),
                    ])->columns(2),
                Forms\Components\Section::make('Personal Information')
                    ->description('Please fill in the personal details of the employee.')
                    ->schema([
                        Forms\Components\TextInput::make('first_name')
                            ->required(),
                        Forms\Components\TextInput::make('last_name'),
                    ])->columns(2),
                // Forms\Components\Section::make('Contact Information')
                //     ->description('Please fill in the contact details of the employee.')
                //     ->schema([
                //         Forms\Components\TextInput::make('address')
                //             ->required(),
                //         Forms\Components\TextInput::make('zip_code')
                //             ->required(),
                //     ])->columns(2),
                Forms\Components\Section::make('Employment Details')
                    ->description('Please fill in the employment details of the employee.')
                    ->schema([
                        Forms\Components\DatePicker::make('date_hire')
                            ->required()
                            ->native(false),
                    ])->columnSpanFull(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('department.name')
                    ->sortable(),
                Tables\Columns\TextColumn::make('position.name')
                    ->sortable(),
                Tables\Columns\TextColumn::make('first_name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('last_name')
                    ->searchable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('date_hire')
                    ->date()
                    ->sortable(),
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
                SelectFilter::make('department_id')
                    ->label('Filter by Department')
                    ->relationship('department', 'name')
                    ->searchable()
                    ->preload(),

                SelectFilter::make('position_id')
                    ->label('Filter by Position')
                    ->relationship('position', 'name')
                    ->searchable()
                    ->preload(),
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
            'index' => Pages\ListEmployees::route('/'),
            'create' => Pages\CreateEmployee::route('/create'),
            'edit' => Pages\EditEmployee::route('/{record}/edit'),
        ];
    }
}
