<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;

class MembresiaPlan extends Model
{
    use HasFactory, LogsActivity;
    protected $table = 'membresia_plans';
    protected $fillable=['plan', 'precio'];

    // Relacion uno a muchos
    public function membresias()
    {
        return $this->hasMany(Membresia::class);
    } 
}
