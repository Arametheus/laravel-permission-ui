<?php
/**
 * Created by PhpStorm.
 * User: darwin
 * Date: 15/5/18
 * Time: 9:07 AM
 */

namespace Dsalinas\LPUI;

use Illuminate\Support\ServiceProvider;


/**
 * Class LaravelPermissionUIServiceProvider
 * @package Dsalinas\LPUI
 */
class LaravelPermissionUIServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/routes/web.php');
        $this->loadViewsFrom(__DIR__.'/resources/views', 'lpui');
    }

    public function register()
    {
        
    }
}