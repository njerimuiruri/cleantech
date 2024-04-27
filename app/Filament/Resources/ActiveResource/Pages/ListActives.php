<?php

namespace App\Filament\Resources\ActiveResource\Pages;

use App\Filament\Resources\ActiveResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListActives extends ListRecords
{
    protected static string $resource = ActiveResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
