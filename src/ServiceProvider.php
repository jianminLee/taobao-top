<?php


namespace Jianminlee\TaobaoTop;

use Illuminate\Support\ServiceProvider as LaravelServiceProvider;
use Jianminlee\TaobaoTop\Services\Factory;

class ServiceProvider extends LaravelServiceProvider
{
    public function boot()
    {
        $this->publishes([
            __DIR__ . '/../config/taobao-top.php' => $this->app->make('path.config') . 'taobao-top.php',
        ], 'config');
    }

    public function register()
    {
        $configs = $this->app->make('config')->get('taobao-top.config', []);
        foreach ($configs as $name => $config){
            $this->app->singleton("taobao-top.{$name}", function () use ($config) {
                return Factory::Tbk($config);
            });
        }
        $this->app->alias(Factory::class, 'taobao-top');
        $this->app->alias("taobao-top.default", 'taobao-top');
    }

    public function provides()
    {
        return [Factory::class, 'taobao-top'];
    }
}
