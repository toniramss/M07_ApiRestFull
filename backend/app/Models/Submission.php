<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Submission extends Model
{
    use HasFactory;

    /**
     * Los atributos que se pueden asignar en masa.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'user_id',
        'assignment_id',
        'file_path',
        'submitted_at',
    ];

    /**
     * Relación con el usuario que realizó la entrega (estudiante).
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Relación con la tarea a la que pertenece la entrega.
     */
    public function assignment()
    {
        return $this->belongsTo(Assignment::class);
    }

}
