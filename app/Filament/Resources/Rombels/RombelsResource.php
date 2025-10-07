<?php

namespace App\Filament\Resources\Rombels;

use App\Filament\Resources\Rombels\Pages\CreateRombels;
use App\Filament\Resources\Rombels\Pages\EditRombels;
use App\Filament\Resources\Rombels\Pages\ListRombels;
use App\Filament\Resources\Rombels\Schemas\RombelsForm;
use App\Filament\Resources\Rombels\Tables\RombelsTable;
use App\Models\Rombels;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class RombelsResource extends Resource
{
    protected static ?string $model = Rombels::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    public static function form(Schema $schema): Schema
    {
        return RombelsForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return RombelsTable::configure($table);
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
            'index' => ListRombels::route('/'),
            'create' => CreateRombels::route('/create'),
            'edit' => EditRombels::route('/{record}/edit'),
        ];
    }
}
