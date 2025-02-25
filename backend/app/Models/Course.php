<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    /**
     * Los atributos que se pueden asignar en masa.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'description',
    ];

    /**
     * Relación con los estudiantes a través de la tabla course_user.
     * Un curso tiene muchos estudiantes.
     */
    public function students()
    {
        return $this->belongsToMany(User::class, 'course_user')->wherePivot('role', 'student');
    }

    /**
     * Relación con los profesores a través de la tabla course_user.
     * Un curso tiene muchos profesores.
     */
    public function teachers()
    {
        return $this->belongsToMany(User::class, 'course_user')->wherePivot('role', 'teacher');
    }

    /**
     * Relación con las asignaturas que pertenecen al curso.
     */
    public function subjects()
    {
        return $this->hasMany(Subject::class);
    }
}
