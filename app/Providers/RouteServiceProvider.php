<?php

namespace App\Providers;

use Illuminate\Routing\Router;
use Illuminate\Http\Request;

use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;

class RouteServiceProvider extends ServiceProvider
{

    protected $namespace = 'App\Http\Controllers';


    public function boot(Router $router)
    {

        parent::boot($router);
    }

    public function map(Router $router, Request $request)
    {
        $locale = $request->segment(1);
        $this->app->setLocale($locale);

        $router->group(['namespace' => $this->namespace, 'prefix' => $locale], function($router) {
            require app_path('Http/routes.php');
        });
    }
}

/*

<?php

namespace App\Providers;

use Illuminate\Routing\Router;
use Illuminate\Http\Request;

use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;

class RouteServiceProvider extends ServiceProvider
{

    protected $namespace = 'App\Http\Controllers';


    public function boot(Router $router)
    {
        //

        parent::boot($router);
    }


    public function map(Router $router)
    {

        $router->group(['namespace' => $this->namespace], function($router) {
            require app_path('Http/routes.php');
        });
    }
}
 */
