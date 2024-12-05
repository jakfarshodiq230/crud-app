<?php

namespace App\Filament\Widgets;

use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;
use Filament\Widgets\StatsOverviewWidget\Card;
use App\Models\User;
use App\Models\Articel;
use App\Models\Author;
use App\Models\Categories;
use App\Models\Tag;

class AdminWidgets extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Card::make('Total Users', User::count()),
            Card::make('Users Registered Today', User::whereDate('created_at', today())->count()),
            Card::make('Tag', Tag::count()),
            Card::make('Articel', Articel::count()),
            Card::make('Author', Author::count()),
            Card::make('Categories', Categories::count()),

        ];
    }
}
