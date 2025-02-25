<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    use HasFactory;

    /**
     * Los atributos que se pueden asignar en masa.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'course_id',
        'teacher_id',
    ];

    /**
     * Relación con el curso al que pertenece la asignatura.
     */
    public function course()
    {
        return $this->belongsTo(Course::class);
    }

    /**
     * Relación con el profesor asignado a la asignatura.
     */
    public function teacher()
    {
        return $this->belongsTo(User::class, 'teacher_id');
    }

    /**
     * Relación con los estudiantes a través de los cursos.
     */
    public function students()
    {
        return $this->belongsToMany(User::class, 'course_user')->wherePivot('role', 'student');
    }
}
