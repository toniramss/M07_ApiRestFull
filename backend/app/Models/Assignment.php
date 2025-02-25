<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Assignment extends Model
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
        'due_date',
        'subject_id',
    ];

    /**
     * Los atributos que deben ser convertidos a otros tipos.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'due_date' => 'datetime',
    ];

    /**
     * Relación con la asignatura a la que pertenece.
     */
    public function subject()
    {
        return $this->belongsTo(Subject::class);
    }
}
