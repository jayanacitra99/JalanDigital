<?php

namespace App\Filament\Admin\Resources\ProjectImages;

use App\Filament\Admin\Resources\ProjectImages\Pages\CreateProjectImage;
use App\Filament\Admin\Resources\ProjectImages\Pages\EditProjectImage;
use App\Filament\Admin\Resources\ProjectImages\Pages\ListProjectImages;
use App\Filament\Admin\Resources\ProjectImages\Schemas\ProjectImageForm;
use App\Filament\Admin\Resources\ProjectImages\Tables\ProjectImagesTable;
use App\Models\ProjectImage;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class ProjectImageResource extends Resource
{
    protected static ?string $model = ProjectImage::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    public static function form(Schema $schema): Schema
    {
        return ProjectImageForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return ProjectImagesTable::configure($table);
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
            'index' => ListProjectImages::route('/'),
            'create' => CreateProjectImage::route('/create'),
            'edit' => EditProjectImage::route('/{record}/edit'),
        ];
    }
}
