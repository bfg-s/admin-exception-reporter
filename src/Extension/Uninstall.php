<?php

namespace Admin\Extend\AdminExceptionReporter\Extension;

use Admin\Core\UnInstallExtensionProvider;
use Admin\Interfaces\ActionWorkExtensionInterface;

/**
 * Class Navigator
 * @package Admin\Extend\AdminExceptionReporter\Extension
 */
class Uninstall extends UnInstallExtensionProvider implements ActionWorkExtensionInterface {

    /**
     * @return void
     */
    public function handle(): void
    {

    }
}
