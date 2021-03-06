<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;


    //protected $connection =  'credapidb';
    protected $connection = 'credbolt_api';

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id')->withTrashed();
    }
}
