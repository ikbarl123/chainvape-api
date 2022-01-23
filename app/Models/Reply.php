<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reply extends Model
{
    use HasFactory;
    protected $fillable=[];
    protected $with = ['user'];
    public function Thread()
    {
        return $this->BelongsTo(Thread::class,'thread_id', 'id');
    }
    public function user()
    {
        return $this->BelongsTo(User::class,'user_id', 'id');
    }
}
