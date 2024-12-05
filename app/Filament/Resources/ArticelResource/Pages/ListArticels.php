<?php

namespace App\Filament\Resources\ArticelResource\Pages;

use App\Filament\Resources\ArticelResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListArticels extends ListRecords
{
    protected static string $resource = ArticelResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
