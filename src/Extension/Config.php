<?php

namespace Admin\Extend\AdminExceptionReporter\Extension;

use Admin\Core\ConfigExtensionProvider;

/**
 * Class Config
 * @package Admin\Extend\AdminExceptionReporter\Extension
 */
class Config extends ConfigExtensionProvider {

    protected $styles = [
        'vendor/bfg-admin-exception-reporter/prism/prism.css'
    ];

    protected $scripts = [
        'vendor/bfg-admin-exception-reporter/prism/prism.js'
    ];
}
