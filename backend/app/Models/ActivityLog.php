<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ActivityLog extends Model
{
    use HasFactory;

    /**
     * Los atributos que se pueden asignar en masa.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'user_id',
        'table_name',
        'changes',
    ];

    /**
     * Los atributos que deben ser convertidos a otros tipos.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'changes' => 'array', // Si almacenas JSON en la base de datos
    ];

    /**
     * Relación con el usuario responsable de la actividad.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
