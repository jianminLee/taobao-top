<?php


namespace Jianminlee\TaobaoTop\Facades;

use Illuminate\Support\Facades\Facade;

class TaobaoTop extends Facade
{
    public static function getFacadeAccessor()
    {
        return 'taobao-top';
    }

    /**
     * @param string $name
     *
     * @return \Jianminlee\TaobaoTop\Tbk\Application
     */
    public static function tbk($name = ''){
        return $name ? app('taobao-top.' . $name) : app('taobao-top');
    }

}
