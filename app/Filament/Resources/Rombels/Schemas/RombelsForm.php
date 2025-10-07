<?php

namespace App\Filament\Resources\Rombels\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class RombelsForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('jurusan')
                    ->options([
                        'Pengembangan Perangkat Lunak dan Game' => 'Pengembangan Perangkat Lunak dan Game',
                        'Teknik Jaringan Komputer dan Telekomunikasi' => 'Teknik Jaringan Komputer dan Telekomunikasi',
                        'Teknik Sepeda Motor' => 'Teknik Sepeda Motor',
                        'Teknik Otomasi Industri' => 'Teknik Otomasi Industri',
                        'Desain Komunikasi Visual' => 'Desain Komunikasi Visual',
                    ]),
                TextInput::make('nama_kelas'),
                TextInput::make('jml_lakilaki'),
                TextInput::make('jml_perempuan'),
            ]);
    }
}
