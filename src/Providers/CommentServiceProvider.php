<?php

namespace Betterde\Comment\Providers;

use Illuminate\Support\ServiceProvider;

/**
 * Date: 2018/9/20
 * @author George
 * @package Betterde\Comment\Providers
 */
class CommentServiceProvider extends ServiceProvider
{
    /**
     * Date: 2018/9/20
     * @author George
     */
    public function boot()
    {
        $this->publishes([
            __DIR__ . '/../Helpers/_migration_helper.php' => base_path('_migration_helper.php')
        ], 'migration-helper');
    }

    /**
     * Date: 2018/9/20
     * @author George
     */
    public function register()
    {

    }
}
