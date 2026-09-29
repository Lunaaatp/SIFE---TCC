<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator; // 1. IMPORTANTE: Adicione esta linha no topo

class AppServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        //
    }

    public function boot(): void
    {
        // 2. ADICIONE ESTA LINHA AQUI:
        Paginator::useBootstrapFive();
    }
}