<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Pivot;

class Like extends Pivot
{
    protected $table = "likes";
    /* Timestamp dell'orario del like */
    public $timestamps = true;
    protected $fillable = ['user_id', 'post_id', 'created_at'];
}
