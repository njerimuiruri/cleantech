<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TrashCollectionResource\Pages;
use App\Filament\Resources\TrashCollectionResource\RelationManagers;
use App\Models\TrashCollection;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class TrashCollectionResource extends Resource
{
    protected static ?string $model = TrashCollection::class;

    protected static ?string $navigationIcon = 'heroicon-o-trash';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('user_id')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('location_id')
                    ->required()
                    ->numeric(),
                Forms\Components\DateTimePicker::make('collection_date_time')
                    ->required(),
                Forms\Components\Toggle::make('is_special_request')
                    ->required(),
                Forms\Components\TextInput::make('status')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('trash_bag_count')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('additional_bags_requested')
                    ->numeric()
                    ->default(null),
                Forms\Components\Textarea::make('notes')
                    ->columnSpanFull(),
                Forms\Components\TextInput::make('collection_day')
                    ->maxLength(255)
                    ->default(null),
                    ])->columns(2);    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('user_id')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('location_id')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('collection_date_time')
                    ->dateTime()
                    ->sortable(),
                Tables\Columns\IconColumn::make('is_special_request')
                    ->boolean(),
                Tables\Columns\TextColumn::make('status')
                    ->searchable(),
                Tables\Columns\TextColumn::make('trash_bag_count')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('additional_bags_requested')
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
                Tables\Columns\TextColumn::make('collection_day')
                    ->searchable(),
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
            'index' => Pages\ListTrashCollections::route('/'),
            'create' => Pages\CreateTrashCollection::route('/create'),
            'edit' => Pages\EditTrashCollection::route('/{record}/edit'),
        ];
    }
}
