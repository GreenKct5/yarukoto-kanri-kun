<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Ramsey\Uuid\Uuid;

class User extends Authenticatable
{
    // プライマリーキーのカラム名
    protected $primaryKey = 'id';

    // プライマリーキーの型
    protected $keyType = 'string';

    // プライマリーキーは自動連番か？
    public $incrementing = false;

    // コンストラクタを追加
    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);

        // newした時に自動的にuuidを設定する。
        $this->attributes['id'] = Uuid::uuid4()->toString();
        $this->attributes['icon'] = '../../img/icon.svg';
    }

    use HasFactory, Notifiable;

    protected $fillable = [
        'id',
        'name',
        'email',
        'password',
        'salt',
        'icon',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function groups()
    {
        return $this->belongsToMany(Group::class, 'users_group', 'user_id', 'group_id');
    }

    public function todos()
    {
        return $this->hasMany(Todo::class, 'last_update_user');
    }

    public function todoStatuses()
    {
        return $this->hasMany(TodoStatus::class);
    }

    public function usersGroups()
    {
        return $this->hasMany(UsersGroup::class);
    }
}
