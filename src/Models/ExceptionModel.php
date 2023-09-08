<?php

namespace Admin\Extend\AdminExceptionReporter\Models;

use Illuminate\Database\Eloquent\Model;

class ExceptionModel extends Model
{
    protected $table = "laravel_exceptions";

    public static $methodColor = [
        'GET'       => 'green',
        'POST'      => 'yellow',
        'PUT'       => 'blue',
        'DELETE'    => 'red',
        'PATCH'     => 'black',
        'OPTIONS'   => 'grey',
    ];

    protected $fillable = [
        'type',
        'code',
        'message',
        'file',
        'line',
        'trace',
        'method',
        'path',
        'query',
        'body',
        'cookies',
        'headers',
        'ip',
    ];
}
