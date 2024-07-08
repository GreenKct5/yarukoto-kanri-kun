<?php
namespace App\Models;

use Ramsey\Uuid\Uuid;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Todo extends Model
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