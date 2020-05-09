# ennnnny/tbk for laravel

> FOR [ennnnny/tbk](https://github.com/ennnnny/tbk)

## Install

```shell
composer require jianminlee/taobao-top
```

## Use

#### publish config file
```shell
php artisan vendor:publish --provider=Jianminlee\\TaobaoTop\\ServiceProvider
```

#### add facade
```php
'TaoBaoTop'    => \Jianminlee\TaobaoTop\Facades\TaobaoTop::class,
```

```php
$taoBaoService = \TaoBaoTop::tbk();
$taoBaoService = \TaoBaoTop::tbk('default');
$taoBaoService->setSession($user->aliAuthorize->token)->sc->savePublisherInfo([
                            'info_type' => 1,
                            'inviter_code' => 'XXXXXXXX'
                        ]);
```

#### more
[ennnnny/tbk](https://github.com/ennnnny/tbk)

## License

MIT
