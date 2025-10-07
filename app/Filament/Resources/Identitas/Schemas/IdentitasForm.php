<?php

namespace App\Filament\Resources\Identitas\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class IdentitasForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make("nama_sekolah"),
                TextInput::make("npsn"),
                TextInput::make("alamat"),
                TextInput::make("telepon"),
                TextInput::make("email"),
                TextInput::make("tahun_berdiri"),
                TextInput::make("no_sk"),
                TextInput::make("tgl_sk"),
                TextInput::make("kepemilikan"),
            ]);
    }
}
