<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Batch extends Model
{
    use HasFactory;
    protected $fillable = [
        'session',
        'name',
        'added_by',
    ];

    public function routines()
    {
        return $this->hasMany(Routine::class);
    }

    public function tasks()
    {
        return $this->hasMany(Task::class);
    }
}
