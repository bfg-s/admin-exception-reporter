<?php

namespace Admin\Extend\AdminExceptionReporter;

use Admin\ExtendProvider;
use Admin\Core\ConfigExtensionProvider;
use Admin\Extend\AdminExceptionReporter\Extension\Config;
use Admin\Extend\AdminExceptionReporter\Extension\Install;
use Admin\Extend\AdminExceptionReporter\Extension\Navigator;
use Admin\Extend\AdminExceptionReporter\Extension\Uninstall;
use Admin\Extend\AdminExceptionReporter\Extension\Permissions;
use Exception;

/**
 * Class ServiceProvider
 * @package Admin\Extend\AdminExceptionReporter
 */
class ServiceProvider extends ExtendProvider
{
    /**
     * Extension ID name
     * @var string
     */
    public static string $name = "bfg/admin-exception-reporter";

    /**
     * Extension call slug
     * @var string
     */
    static string $slug = "bfg_admin_exception_reporter";

    /**
     * Extension description
     * @var string
     */
    public static string $description = "Exception reporter for laravel";

    /**
     * @var string
     */
    protected string $navigator = Navigator::class;

    /**
     * @var string
     */
    protected string $install = Install::class;

    /**
     * @var string
     */
    protected string $uninstall = Uninstall::class;

    /**
     * @var ConfigExtensionProvider|string
     */
    protected string|ConfigExtensionProvider $config = Config::class;

    /**
     * @return void
     * @throws Exception
     */
    public function boot(): void
    {
        parent::boot();

        $this->publishes([
            __DIR__.'/../assets' => public_path('vendor/bfg-admin-exception-reporter'),
            __DIR__ . '/../migrations' => database_path('migrations')
        ], 'bfg-admin-exception-reporter');

        $this->loadViewsFrom(__DIR__.'/../views', 'bfg-admin-exception-reporter');
    }
}

