<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'name',
        'color',
    ];

    public function users()
    {
        return $this->belongsToMany(User::class, 'users_group', 'group_id', 'user_id');
    }

    public function subjects()
    {
        return $this->hasMany(Subject::class);
    }
}
