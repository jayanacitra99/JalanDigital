<?php

namespace App\Filament\Admin\Resources\Projects\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;
use Illuminate\Support\Str;

class ProjectForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('title')
                    ->required()
                    ->live(onBlur: true)
                    ->afterStateUpdated(fn ($state, callable $set) => $set('slug', Str::slug($state))),
                TextInput::make('slug')
                    ->required()
                    ->unique(ignoreRecord: true),
                TextInput::make('client_name'),
                TextInput::make('website_url')
                    ->url(),
                FileUpload::make('thumbnail_image')
                    ->image()
                    ->directory('projects')
                    ->required(),
                RichEditor::make('description')
                    ->required()
                    ->columnSpanFull(),
                DatePicker::make('completed_at'),
            ]);
    }
}
