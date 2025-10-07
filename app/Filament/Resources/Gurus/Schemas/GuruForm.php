<?php

namespace App\Filament\Resources\Gurus\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class GuruForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                FileUpload::make("foto")->disk("public")->directory("foto"),
                TextInput::make("nama"),
                Select::make('jabatan')
                    ->options([
                        'Kepala Sekolah' => 'Kepala Sekolah',
                        'Wakil Kepala Sekolah' => 'Wakil Kepala Sekolah',
                        'Kepala Program Keahlian' => 'Kepala Program Keahlian',
                    ]),
                TextInput::make("bagian"),
            ]);
    }
}
