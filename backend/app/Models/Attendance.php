<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attendance extends Model
{
    use HasFactory;

    /**
     * Los atributos que se pueden asignar en masa.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'user_id',
        'calendar_event_id',
        'status',
    ];

    /**
     * Los atributos que deben ser convertidos a otros tipos.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'status' => 'string',
    ];

    /**
     * Relación con el usuario (estudiante).
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Relación con el evento de calendario (clase).
     */
    public function calendarEvent()
    {
        return $this->belongsTo(CalendarEvent::class);
    }
}
