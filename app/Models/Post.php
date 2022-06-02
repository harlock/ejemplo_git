<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
   // protected $primaryKey='alguun_valor';
    protected $fillable = [
        'title',
        'content',
        'state',
        'tags',
        'user_id',
    ];

    public function getUsers(){
        return $this->belongsTo(User::class,'user_id','id');
    }
}
