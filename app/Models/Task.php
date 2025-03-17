<?php

namespace App\Models;

use App\Models\Batch;
use App\Models\Subject;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Task extends Model
{
    use HasFactory;

    protected $fillable = [
        'subject_id',
        'batch_id',
        'details',
        'end_date',
        'added_by',
    ];

    public function subject() {
        return $this->belongsTo(Subject::class);
    }

    public function batch() {
        return $this->belongsTo(Batch::class);
    }
}
