<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Ramsey\Uuid\Uuid;

class Group extends Model
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
    }

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
