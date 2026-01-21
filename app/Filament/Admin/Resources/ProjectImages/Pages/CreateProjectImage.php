<?php

namespace App\Filament\Admin\Resources\ProjectImages\Pages;

use App\Filament\Admin\Resources\ProjectImages\ProjectImageResource;
use Filament\Resources\Pages\CreateRecord;

class CreateProjectImage extends CreateRecord
{
    protected static string $resource = ProjectImageResource::class;
}
