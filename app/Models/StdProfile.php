<?php

namespace App\Models;

use App\Models\User;
use App\Models\Batch;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class StdProfile extends Model
{
    use HasFactory;
    protected $table = 'std_profiles';
    protected $fillable = ['user_id', 'batch_id', 'mobile', 'address', "image"];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function batch()
    {
        return $this->belongsTo(Batch::class);
    }
}
