<?php

namespace Admin\Extend\AdminExceptionReporter\Extension;

use Admin\Core\InstallExtensionProvider;
use Admin\Interfaces\ActionWorkExtensionInterface;

/**
 * Class Install
 * @package Admin\Extend\AdminExceptionReporter\Extension
 */
class Install extends InstallExtensionProvider implements ActionWorkExtensionInterface {

    /**
     * @return void
     */
    public function handle(): void
    {
        \Artisan::call('vendor:publish', [
            '--tag' => 'bfg-admin-exception-reporter',
            '--force' => true
        ]);
    }
}
