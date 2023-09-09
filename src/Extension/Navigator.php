<?php

namespace Admin\Extend\AdminExceptionReporter\Extension;

use Admin\Core\NavigatorExtensionProvider;
use Admin\Extend\AdminExceptionReporter\AdminExceptionReporterController;
use Admin\Extend\AdminExceptionReporter\Models\ExceptionModel;
use Admin\Interfaces\ActionWorkExtensionInterface;

/**
 * Class Navigator
 * @package Admin\Extend\AdminExceptionReporter\Extension
 */
class Navigator extends NavigatorExtensionProvider implements ActionWorkExtensionInterface {

    /**
     * @return void
     */
    public function handle(): void
    {

        $this->item('Exceptions')
            ->resource('exceptions', AdminExceptionReporterController::class)
            ->icon_bolt()
            ->badge_danger(ExceptionModel::class, ['id' => 'not null']);
    }
}
