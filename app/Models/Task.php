<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Comment;
class Task extends Model
{
    use HasFactory;


    // Get User Assigned with Task
    public function assignedTo()
    {
        return $this->belongsTo(User::class, 'assigned_to');
    }

    // Get all Comments
    public function comments()
    {
        return $this->hasMany(Comment::class, 'task_id');
    }
}
