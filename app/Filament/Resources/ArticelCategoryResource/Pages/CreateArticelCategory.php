<?php

namespace App\Filament\Resources\ArticelCategoryResource\Pages;

use App\Filament\Resources\ArticelCategoryResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateArticelCategory extends CreateRecord
{
    protected static string $resource = ArticelCategoryResource::class;
    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
