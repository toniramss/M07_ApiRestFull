<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Log extends Model
{
    use HasFactory;

    /**
     * Los atributos que se pueden asignar en masa.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'user_id',
        'action',
        'details',
    ];

    /**
     * Relación con el usuario que realizó la acción.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Método para registrar un log.
     *
     * @param int|null $userId
     * @param string $action
     * @param string|null $details
     * @return Log
     */
    public static function logAction($userId, string $action, $details = null): self
    {
        return self::create([
            'user_id' => $userId,
            'action' => $action,
            'details' => $details,
        ]);
    }
}
