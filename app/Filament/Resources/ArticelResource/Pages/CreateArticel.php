<?php

namespace App\Filament\Resources\ArticelResource\Pages;

use App\Filament\Resources\ArticelResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateArticel extends CreateRecord
{
    protected static string $resource = ArticelResource::class;
    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
