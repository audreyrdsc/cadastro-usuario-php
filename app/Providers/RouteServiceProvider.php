<?php

namespace App\Providers;

use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * O namespace padrão para os controllers da aplicação.
     *
     * @var string|null
     */
    // protected $namespace = 'App\\Http\\Controllers'; // Opcional no Laravel 12

    /**
     * Caminho para a "home" da aplicação.
     *
     * @var string
     */
    public const HOME = '/';

    /**
     * Defina as rotas da aplicação.
     */
    public function boot(): void
    {
        $this->routes(function () {

            // Rotas de API
            Route::middleware('api')
                ->prefix('api')
                ->group(base_path('routes/api.php'));

            // Rotas web
            Route::middleware('web')
                ->group(base_path('routes/web.php'));
        });
    }
}
