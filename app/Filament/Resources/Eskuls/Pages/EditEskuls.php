<?php

namespace App\Filament\Resources\Eskuls\Pages;

use App\Filament\Resources\Eskuls\EskulsResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditEskuls extends EditRecord
{
    protected static string $resource = EskulsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
