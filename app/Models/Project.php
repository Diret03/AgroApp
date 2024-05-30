<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'start_date',
        'end_date',
        'status',
        'progress_percentage',
        'responsible_id',
    ];


    protected $casts = [
        'start_date' => 'date',
        'end_date' => 'date',
    ];


    public function getStatusAttribute($value)
    {
        $statuses = [
            'initiated' => 'Iniciado',
            'in_progress' => 'En Progreso',
            'cancelled' => 'Cancelado',
            'completed' => 'Completado',
        ];

        return $statuses[$value] ?? null;
    }
    /**
     * Obtiene el cliente asociado al proyecto.
     */
    public function responsible()
    {
        return $this->belongsTo(Responsible::class);
    }

    public function tasks()
    {
        return $this->hasMany(Task::class);
    }
}
