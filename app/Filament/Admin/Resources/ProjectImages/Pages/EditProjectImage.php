<?php

namespace App\Filament\Admin\Resources\ProjectImages\Pages;

use App\Filament\Admin\Resources\ProjectImages\ProjectImageResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditProjectImage extends EditRecord
{
    protected static string $resource = ProjectImageResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
