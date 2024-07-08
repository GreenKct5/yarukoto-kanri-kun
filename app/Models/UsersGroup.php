<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UsersGroup extends Model
{
    use HasFactory;

    // UUIDを主キーとして使用する設定
    protected $keyType = 'string';
    protected $table = "users_group";
    public $incrementing = false;

    // フィルラブルの設定
    protected $fillable = [
        'id',
        'user_id',
        'group_id',
    ];

    // リレーションの設定
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function group()
    {
        return $this->belongsTo(Group::class);
    }

    // Bootメソッドのオーバーライド
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            if (empty($model->{$model->getKeyName()})) {
                $model->{$model->getKeyName()} = (string) \Illuminate\Support\Str::uuid();
            }
        });
    }
}
