<?php

namespace App\Filament\Admin\Resources\Inquiries\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class InquiryForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->required()
                    ->readOnly(fn (string $context): bool => $context !== 'create'),
                TextInput::make('email')
                    ->label('Email address')
                    ->email()
                    ->required()
                    ->readOnly(fn (string $context): bool => $context !== 'create'),
                TextInput::make('phone')
                    ->tel()
                    ->readOnly(fn (string $context): bool => $context !== 'create'),
                TextInput::make('service_interest')
                    ->readOnly(fn (string $context): bool => $context !== 'create'),
                Textarea::make('message')
                    ->required()
                    ->columnSpanFull()
                    ->readOnly(fn (string $context): bool => $context !== 'create'),
                Select::make('status')
                    ->options([
                        'new' => 'New',
                        'read' => 'Read',
                        'contacted' => 'Contacted'
                    ])
                    ->default('new')
                    ->required(),
            ]);
    }
}
