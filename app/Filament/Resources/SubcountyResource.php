<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SubcountyResource\Pages;
use App\Filament\Resources\SubcountyResource\RelationManagers;
use App\Models\Subcounty;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class SubcountyResource extends Resource
{
    protected static ?string $model = Subcounty::class;

    protected static ?string $navigationIcon = 'heroicon-o-map';
    protected static ?string $navigationGroup = 'Regions';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('subcounty_name')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('county_id')
                    ->required()
                    ->numeric(),
                    ])->columns(2);    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('subcounty_name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('county_id')
                    ->numeric()
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
            'index' => Pages\ListSubcounties::route('/'),
            'create' => Pages\CreateSubcounty::route('/create'),
            'edit' => Pages\EditSubcounty::route('/{record}/edit'),
        ];
    }
}
