<?php

namespace App\Filament\Resources\ArticelTagResource\Pages;

use App\Filament\Resources\ArticelTagResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListArticelTags extends ListRecords
{
    protected static string $resource = ArticelTagResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
