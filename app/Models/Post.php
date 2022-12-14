<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table='posts';
    protected $fillable = [
        'cate_id',
        'title',
        'content',
        'image',
        'created_by',
        'typepost',
    ];
    public function category()
    {
        return $this->belongsTo(Category::class, 'cate_id', 'id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'created_by', 'id');
    }

    public function comment()
    {

    return $this->hasMany(Comment::class,'post_id','id');
    
    }
}   
