<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Task;

class Comment extends Model
{
    use HasFactory;

    public function commentedBy()
    {
        return $this->belongsTo(User::class, 'comment_id');
    }
}
