<?php

namespace App\Filament\Resources\ArticelResource\Pages;

use App\Filament\Resources\ArticelResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditArticel extends EditRecord
{
    protected static string $resource = ArticelResource::class;

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
