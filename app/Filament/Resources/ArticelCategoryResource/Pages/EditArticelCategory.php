<?php

namespace App\Filament\Resources\ArticelCategoryResource\Pages;

use App\Filament\Resources\ArticelCategoryResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditArticelCategory extends EditRecord
{
    protected static string $resource = ArticelCategoryResource::class;

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
