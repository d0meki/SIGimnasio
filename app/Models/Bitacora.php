<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bitacora extends Model
{
    use HasFactory;
    protected $table = 'activity_log';
    protected $fillable = ['id', 'log_name', 'description', 'subject_type', 'causer_type', 'created_at'];
}
