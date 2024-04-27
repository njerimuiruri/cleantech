<?php

namespace App\Filament\Resources\ActiveResource\Pages;

use App\Filament\Resources\ActiveResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateActive extends CreateRecord
{
    protected static string $resource = ActiveResource::class;
}
