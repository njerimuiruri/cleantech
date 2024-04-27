<?php

namespace App\Filament\Resources\SmsReminderResource\Pages;

use App\Filament\Resources\SmsReminderResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditSmsReminder extends EditRecord
{
    protected static string $resource = SmsReminderResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
