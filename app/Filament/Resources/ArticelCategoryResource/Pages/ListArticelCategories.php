<?php

namespace App\Filament\Resources\ArticelCategoryResource\Pages;

use App\Filament\Resources\ArticelCategoryResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListArticelCategories extends ListRecords
{
    protected static string $resource = ArticelCategoryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
