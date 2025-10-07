<?php

namespace App\Filament\Resources\Profils\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class ProfilsForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make("sejarah"),
                TextInput::make("visi"),
                TextInput::make("misi"),
            ]);
    }
}
