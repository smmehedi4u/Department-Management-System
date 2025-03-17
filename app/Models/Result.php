<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Result extends Model
{
    use HasFactory;
    protected $fillable = [
        'file',
        'date',
        'batch_id',
        'result_type',
        'added_by'
    ];

    public function batch()
    {
        return $this->belongsTo(Batch::class);
    }
}
