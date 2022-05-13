<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Task;
use App\Models\User;

class Comment extends Model
{
    use HasFactory;

    public function commentedBy()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
