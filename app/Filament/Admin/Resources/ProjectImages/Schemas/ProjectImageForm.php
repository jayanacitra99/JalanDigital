<?php

namespace App\Filament\Admin\Resources\ProjectImages\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Schemas\Schema;

class ProjectImageForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('project_id')
                    ->relationship('project', 'title')
                    ->required()
                    ->searchable()
                    ->preload(),
                FileUpload::make('image_path')
                    ->image()
                    ->directory('project-images')
                    ->required(),
            ]);
    }
}
