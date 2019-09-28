<?php


namespace Jianminlee\TaobaoTop\Services;

use Illuminate\Support\Str;

/**
 * Class Factory.
 *
 * @method static \Jianminlee\TaobaoTop\Tbk\Application tbk(array $config)
 */
class Factory
{
    /**
     * @param string $name
     * @param array $config
     *
     * @return \ETaobao\Kernel\ServiceContainer
     */
    public static function make($name, array $config)
    {
        $namespace = Str::studly($name);
        $application = "\\Jianminlee\\TaobaoTop\\{$namespace}\\Application";

        return new $application($config);
    }

    /**
     * Dynamically pass methods to the application.
     *
     * @param string $name
     * @param array  $arguments
     *
     * @return mixed
     */
    public static function __callStatic($name, $arguments)
    {
        return self::make($name, ...$arguments);
    }
}
