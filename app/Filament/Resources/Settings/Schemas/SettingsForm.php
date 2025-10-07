<?php

namespace App\Filament\Resources\Settings\Schemas;


use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class SettingsForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                FileUpload::make("logo")->disk("public")->directory("foto"),
                FileUpload::make("foto")->disk("public")->directory("foto"),
                TextInput::make("nama_sekolah"),
                TextInput::make("nama_kepsek"),
                TextInput::make("sambutan"),
            ]);
    }
}
