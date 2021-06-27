<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mode extends Model
{
    protected $table = 'mode';
    protected $guarded = ['created_at', 'updated_at'];
}
