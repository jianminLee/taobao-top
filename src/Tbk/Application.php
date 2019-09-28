<?php

/*
 * This file is part of the ennnnny/tbk.
 *
 * (c) ennnnny <kuye1130@gmail.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Jianminlee\TaobaoTop\Tbk;

use ETaobao\Kernel\ServiceContainer;
use Illuminate\Support\Arr;

/**
 * Class Application.
 *
 * @property \ETaobao\Tbk\Item\Client               $item
 * @property \ETaobao\Tbk\Shop\Client               $shop
 * @property \ETaobao\Tbk\Rebate\Client             $rebate
 * @property \ETaobao\Tbk\Uatm\Client               $uatm
 * @property \ETaobao\Tbk\Ju\Client                 $ju
 * @property \ETaobao\Tbk\Spread\Client             $spread
 * @property \ETaobao\Tbk\Dg\Client                 $dg
 * @property \ETaobao\Tbk\Coupon\Client             $coupon
 * @property \ETaobao\Tbk\Tpwd\Client               $tpwd
 * @property \ETaobao\Tbk\Content\Client            $content
 * @property \ETaobao\Tbk\Sc\Client                 $sc
 * @property \ETaobao\Tbk\Order\Client              $order
 */
class Application extends ServiceContainer
{
    /**
     * @var array
     */
    protected $providers = [
        \ETaobao\Tbk\Item\ServiceProvider::class,
        \ETaobao\Tbk\Shop\ServiceProvider::class,
        \ETaobao\Tbk\Rebate\ServiceProvider::class,
        \ETaobao\Tbk\Uatm\ServiceProvider::class,
        \ETaobao\Tbk\Ju\ServiceProvider::class,
        \ETaobao\Tbk\Spread\ServiceProvider::class,
        \ETaobao\Tbk\Dg\ServiceProvider::class,
        \ETaobao\Tbk\Coupon\ServiceProvider::class,
        \ETaobao\Tbk\Tpwd\ServiceProvider::class,
        \ETaobao\Tbk\Content\ServiceProvider::class,
        \ETaobao\Tbk\Sc\ServiceProvider::class,
        \ETaobao\Tbk\Order\ServiceProvider::class,
    ];

    public function setSession(string $session){
        $this->userConfig['session'] = $session;
        return $this;
    }
}
