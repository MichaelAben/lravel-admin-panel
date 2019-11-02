<?php

namespace MabenDev\AdminPanel;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

/**
 * Class PermissionProvider
 * @package MabenDev\Permissions
 *
 * @author Michael Aben
 */
class AdminPanelProvider extends ServiceProvider
{
    public function register()
    {
        //
    }

    public function boot()
    {
        $this->publishes([
            __DIR__.'/Assets' => public_path('mabendev/adminpanel'),
        ], 'public');

        $this->publishes([
            __DIR__.'/Views' => resource_path('views/mabendev/adminpanel'),
        ]);
    }
}