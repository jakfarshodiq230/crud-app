<?php

namespace App\Filament\Resources\ArticelTagResource\Pages;

use App\Filament\Resources\ArticelTagResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateArticelTag extends CreateRecord
{
    protected static string $resource = ArticelTagResource::class;
    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
