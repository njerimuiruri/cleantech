<?php

namespace App\Filament\Resources\TrashCollectionResource\Pages;

use App\Filament\Resources\TrashCollectionResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListTrashCollections extends ListRecords
{
    protected static string $resource = TrashCollectionResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
