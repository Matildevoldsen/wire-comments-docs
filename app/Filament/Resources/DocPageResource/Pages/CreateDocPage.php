<?php

namespace App\Filament\Resources\DocPageResource\Pages;

use App\Filament\Resources\DocPageResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateDocPage extends CreateRecord
{
    protected static string $resource = DocPageResource::class;
}
