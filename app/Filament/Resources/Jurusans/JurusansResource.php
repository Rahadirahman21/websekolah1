<?php

namespace App\Filament\Resources\Jurusans;

use App\Filament\Resources\Jurusans\Pages\CreateJurusans;
use App\Filament\Resources\Jurusans\Pages\EditJurusans;
use App\Filament\Resources\Jurusans\Pages\ListJurusans;
use App\Filament\Resources\Jurusans\Schemas\JurusansForm;
use App\Filament\Resources\Jurusans\Tables\JurusansTable;
use App\Models\Jurusans;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class JurusansResource extends Resource
{
    protected static ?string $model = Jurusans::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    public static function form(Schema $schema): Schema
    {
        return JurusansForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return JurusansTable::configure($table);
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
            'index' => ListJurusans::route('/'),
            'create' => CreateJurusans::route('/create'),
            'edit' => EditJurusans::route('/{record}/edit'),
        ];
    }
}
