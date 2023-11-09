<?php

namespace Admin\Extend\AdminExceptionReporter\Extension;

use Admin\Core\ConfigExtensionProvider;
use Admin\ExtendProvider;

/**
 * Class Config
 * @package Admin\Extend\AdminExceptionReporter\Extension
 */
class Config extends ConfigExtensionProvider {

    /**
     * @param  ExtendProvider  $provider
     */
    public function __construct(ExtendProvider $provider)
    {
        parent::__construct($provider);

        $this->styles[] = 'vendor/bfg-admin-exception-reporter/prism/prism.css';
        $this->scripts[] = 'vendor/bfg-admin-exception-reporter/prism/prism.js';
    }
}
