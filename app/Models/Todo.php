<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'subject_id',
        'title',
        'description',
        'deadline',
        'last_update_user',
    ];

    public function subject()
    {
        return $this->belongsTo(Subject::class);
    }

    public function lastUpdateUser()
    {
        return $this->belongsTo(User::class, 'last_update_user');
    }

    public function todoStatuses()
    {
        return $this->hasMany(TodoStatus::class);
    }
}
