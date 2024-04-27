<?php

namespace App\Filament\Resources\TrashCollectionResource\Pages;

use App\Filament\Resources\TrashCollectionResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditTrashCollection extends EditRecord
{
    protected static string $resource = TrashCollectionResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
