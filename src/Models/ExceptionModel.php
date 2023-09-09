<?php

namespace Admin\Extend\AdminExceptionReporter\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Admin\Extend\AdminExceptionReporter\Models\ExceptionModel
 *
 * @property int $id
 * @property string $type
 * @property string $code
 * @property string $message
 * @property string $file
 * @property int $line
 * @property string $trace
 * @property string $method
 * @property string $path
 * @property string $query
 * @property string $body
 * @property string $cookies
 * @property string $headers
 * @property string $ip
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|ExceptionModel newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ExceptionModel newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ExceptionModel query()
 * @method static \Illuminate\Database\Eloquent\Builder|ExceptionModel whereBody($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ExceptionModel whereCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ExceptionModel whereCookies($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ExceptionModel whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ExceptionModel whereFile($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ExceptionModel whereHeaders($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ExceptionModel whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ExceptionModel whereIp($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ExceptionModel whereLine($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ExceptionModel whereMessage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ExceptionModel whereMethod($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ExceptionModel wherePath($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ExceptionModel whereQuery($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ExceptionModel whereTrace($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ExceptionModel whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ExceptionModel whereUpdatedAt($value)
 * @mixin \Eloquent
 */
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
