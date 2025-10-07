<?php

namespace App\Filament\Resources\Jurusans\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class JurusansForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                FileUpload::make("logo")->disk("public")->directory("foto"),
                TextInput::make("nama_jurusan"),
                TextInput::make("pengertian"),
            ]);
    }
}
