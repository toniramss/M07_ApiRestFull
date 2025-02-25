<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CalendarEvent extends Model
{
    use HasFactory;

    /**
     * Los atributos que se pueden asignar en masa.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'title',
        'description',
        'start',
        'end',
        'user_id',
    ];

    /**
     * Los atributos que deben ser convertidos a otros tipos.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'start' => 'datetime',
        'end' => 'datetime',
    ];

    /**
     * Relación con el usuario que creó el evento.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Relación con la asistencia de los usuarios a este evento.
     */
    public function attendances()
    {
        return $this->hasMany(Attendance::class);
    }
}
