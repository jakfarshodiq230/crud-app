<?php

namespace App\Providers;

use Filament\Facades\Filament;
use Illuminate\Support\ServiceProvider;

class FilamentServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        Filament::serving(function () {
            Filament::setTheme('default'); // jika ingin menyesuaikan tema
            config(['filament.name' => 'Nama Aplikasi Baru']);
        });
    }
}
