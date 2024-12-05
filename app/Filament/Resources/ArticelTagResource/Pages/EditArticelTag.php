<?php

namespace App\Filament\Resources\ArticelTagResource\Pages;

use App\Filament\Resources\ArticelTagResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditArticelTag extends EditRecord
{
    protected static string $resource = ArticelTagResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
