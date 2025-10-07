<?php

namespace App\Filament\Resources\Beritas\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class BeritasForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                FileUpload::make("foto")->disk("public")->directory("foto"),
                DatePicker::make("tanggal"),
                TextInput::make("nama_berita"),
            ]);
    }
}
