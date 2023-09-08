<p align="center"><a href="https://wood.veskod.com/documentation/admin-panel" target="_blank">
<img src="https://wood.veskod.com/images/logo.png" alt="Laravel Logo">
</a></p>

<p align="center">
<a href="https://packagist.org/packages/bfg/admin-exception-reporter"><img src="https://img.shields.io/packagist/dt/bfg/admin-exception-reporter" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/bfg/admin-exception-reporter"><img src="https://img.shields.io/packagist/v/bfg/admin-exception-reporter" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/bfg/admin-exception-reporter"><img src="https://img.shields.io/packagist/l/bfg/admin-exception-reporter" alt="License"></a>
</p>

# Install
```
composer require bfg/admin-exception-reporter
```
# Admin install
```
php artisan admin:extension bfg/admin-exception-reporter --install
```
```
php artisan migrate
```
Open `app/Exceptions/Handler.php`, call `Reporter::report()` inside `report` method:
```php
namespace App\Exceptions;

use Admin\Extend\AdminExceptionReporter\Reporter;
use Exception;
use Illuminate\Auth\AuthenticationException;
use Illuminate\Validation\ValidationException;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;

class Handler extends ExceptionHandler
{
    ...

    public function report(Exception $exception)
    {
        if ($this->shouldReport($exception)) {
            Reporter::report($exception);
        }

//        parent::report($exception);
    }
    
    ...

}
```
