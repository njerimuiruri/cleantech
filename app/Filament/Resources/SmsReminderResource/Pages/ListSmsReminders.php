<?php

namespace App\Filament\Resources\SmsReminderResource\Pages;

use App\Filament\Resources\SmsReminderResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListSmsReminders extends ListRecords
{
    protected static string $resource = SmsReminderResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
