<?php

namespace App\Filament\Resources\Identitas\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class IdentitasTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make("nama_sekolah"),
                TextColumn::make("npsn"),
                TextColumn::make("alamat"),
                TextColumn::make("telepon"),
                TextColumn::make("email"),
                TextColumn::make("tahun_berdiri"),
                TextColumn::make("no_sk"),
                TextColumn::make("tgl_sk"),
                TextColumn::make("kepemilikan"),
            ])
            ->filters([
                //
            ])
            ->recordActions([
                EditAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
