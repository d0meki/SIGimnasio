<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;

class Cliente extends Model
{
    use HasFactory, LogsActivity;
    protected $primaryKey = 'dni';
    public $incrementing = false;
    protected $table = 'clientes';
    protected $fillable=['dni','nombre', 'telefono'];
    // Relacion uno a muchos
    public function recibos()
    {
        return $this->hasMany(Recibo::class, 'cliente_dni', 'dni');
    }

    // Relacion uno a muchos
    public function asistencias()
    {
        return $this->hasMany(Asistencia::class, 'cliente_dni', 'dni');
    }
}
