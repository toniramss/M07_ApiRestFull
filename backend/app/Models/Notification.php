<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
    use HasFactory;

    /**
     * Los atributos que se pueden asignar en masa.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'user_id',
        'type',
        'data',
        'is_read',
    ];

    /**
     * Los atributos que deben ser convertidos a otros tipos.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'data' => 'array', // Convierte 'data' a un array cuando se recupera.
    ];

    /**
     * Relación con el usuario que recibe la notificación.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Marcar la notificación como leída.
     */
    public function markAsRead()
    {
        $this->update(['is_read' => true]);
    }

    /**
     * Marcar la notificación como no leída.
     */
    public function markAsUnread()
    {
        $this->update(['is_read' => false]);
    }
}
