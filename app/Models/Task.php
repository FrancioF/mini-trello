<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $fillable = [
        'projet_id',
        'user_id',
        'titre',
        'description',
        'statut',
        'date_creation'
    ];

    public function project()
    {
        return $this->belongsTo(Project::class, 'projet_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}