<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class vapestore extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_store';
    public $timestamps = false;
    protected $fillable = [
        'id_store',
        'lat',
        'lng',
        'namaToko',
        'alamat',
        'imgurl'
    ];
}
