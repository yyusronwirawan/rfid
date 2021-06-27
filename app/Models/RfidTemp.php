<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RfidTemp extends Model
{
    protected $table = 'temp_rfid';
    protected $guarded = ['id','created_at', 'updated_at'];
}
