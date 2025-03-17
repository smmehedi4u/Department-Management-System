<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Routine extends Model
{
    use HasFactory;
    protected $fillable = [
        'batch_id',
        'subject_id',
        'teacher_id',
        'day',
        'from_time',
        'to_time',
        'added_by',
    ];

    public function batch()
    {
        return $this->belongsTo(Batch::class, 'batch_id');
    }
    public function subject()
    {
        return $this->belongsTo(Subject::class, 'subject_id');
    }
    public function teacher()
    {
        return $this->belongsTo(User::class, 'teacher_id');
    }
}
