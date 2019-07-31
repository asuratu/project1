<?php

namespace App\Providers;

use ZhuiTech\BootLaravel\Providers\LaravelProvider;
use ZhuiTech\BootLaravel\Providers\MicroServiceProvider;
use ZhuiTech\BootLaravel\Providers\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    protected $providers = [
        LaravelProvider::class,
        MicroServiceProvider::class,
    ];
}
