<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Thread extends Model
{
    use HasFactory;
    protected $fillable=['user_id','title','text'];
    protected $with = ['Author:id,name'];
    public function Category()
    {
        return $this->BelongsTo(Category::class,'cat_id', 'id');
    }
    public function Author()
    {
        return $this->BelongsTo(User::class,'user_id', 'id');
    }
    public function Reply()
    {
        return $this->HasMany(Reply::class);
    }
}
