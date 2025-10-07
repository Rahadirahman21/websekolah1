<?php

namespace App\Filament\Resources\Beritas\Pages;

use App\Filament\Resources\Beritas\BeritasResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditBeritas extends EditRecord
{
    protected static string $resource = BeritasResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
