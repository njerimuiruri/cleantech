<?php

namespace App\Filament\Resources\ActiveResource\Pages;

use App\Filament\Resources\ActiveResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditActive extends EditRecord
{
    protected static string $resource = ActiveResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
