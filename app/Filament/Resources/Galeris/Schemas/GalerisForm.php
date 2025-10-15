<?php

namespace App\Filament\Resources\Galeris\Schemas;

use Faker\Core\File;
use Filament\Forms\Components\FileUpload;
use Filament\Schemas\Schema;

class GalerisForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                FileUpload::make("foto")->disk("public")->directory("foto"),
            ]);
    }
}
