<?php

namespace App\Filament\Resources\Profils;

use App\Filament\Resources\Profils\Pages\CreateProfils;
use App\Filament\Resources\Profils\Pages\EditProfils;
use App\Filament\Resources\Profils\Pages\ListProfils;
use App\Filament\Resources\Profils\Schemas\ProfilsForm;
use App\Filament\Resources\Profils\Tables\ProfilsTable;
use App\Models\Profils;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class ProfilsResource extends Resource
{
    protected static ?string $model = Profils::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    public static function form(Schema $schema): Schema
    {
        return ProfilsForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return ProfilsTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListProfils::route('/'),
            'create' => CreateProfils::route('/create'),
            'edit' => EditProfils::route('/{record}/edit'),
        ];
    }
}
