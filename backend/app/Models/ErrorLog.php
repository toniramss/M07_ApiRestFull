<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ErrorLog extends Model
{
    use HasFactory;

    /**
     * Los atributos que se pueden asignar en masa.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'error_message',
        'stack_trace',
    ];

    /**
     * Registrar un nuevo error en el log.
     *
     * @param string $message
     * @param string $trace
     * @return ErrorLog
     */
    public static function logError(string $message, string $trace): self
    {
        return self::create([
            'error_message' => $message,
            'stack_trace' => $trace,
        ]);
    }
}
