<?php

namespace App\Filament\Resources\Eskuls\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class EskulsForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                FileUpload::make("foto")->disk("public")->directory("foto"),
                TextInput::make("nama_eskul"),
                TextInput::make("jadwal"),
                TextInput::make("detail"),
            ]);
    }
}
