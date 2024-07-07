<?php

namespace App\Filament\Resources\DocPageResource\Pages;

use App\Filament\Resources\DocPageResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditDocPage extends EditRecord
{
    protected static string $resource = DocPageResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
