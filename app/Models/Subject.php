<?php
namespace App\Models;
use Ramsey\Uuid\Uuid;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subject extends Model
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
    public $timestamps = false; 
    protected $fillable = [
        'id',
        'group_id',
        'name',
    ];

    public function group()
    {
        return $this->belongsTo(Group::class);
    }

    public function todos()
    {
        return $this->hasMany(Todo::class);
    }
}
