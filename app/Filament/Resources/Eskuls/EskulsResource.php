<?php

namespace App\Filament\Resources\Eskuls;

use App\Filament\Resources\Eskuls\Pages\CreateEskuls;
use App\Filament\Resources\Eskuls\Pages\EditEskuls;
use App\Filament\Resources\Eskuls\Pages\ListEskuls;
use App\Filament\Resources\Eskuls\Schemas\EskulsForm;
use App\Filament\Resources\Eskuls\Tables\EskulsTable;
use App\Models\Eskuls;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class EskulsResource extends Resource
{
    protected static ?string $model = Eskuls::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    public static function form(Schema $schema): Schema
    {
        return EskulsForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return EskulsTable::configure($table);
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
            'index' => ListEskuls::route('/'),
            'create' => CreateEskuls::route('/create'),
            'edit' => EditEskuls::route('/{record}/edit'),
        ];
    }
}
