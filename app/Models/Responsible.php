<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Responsible extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'last_name',
        'area',
        'phone_number',
    ];

    public function projects()
    {
        return $this->hasMany(Project::class);
    }
}
