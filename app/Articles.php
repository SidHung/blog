<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Articles extends Model
{
    // protected $guarded = []; //小河8月會解釋，顆顆
    protected $fillable = ['id', 'content'];
}
