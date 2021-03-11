<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;

class Recibo extends Model
{
    use HasFactory, LogsActivity;
    protected $table = 'recibos';
    protected $fillable = ['fecha', 'cliente_dni', 'persona_dni', 'monto', 'fecha_fin'];


    // Relacion uno a muchos (inverso)
    public function cliente()
    {
        return $this->belongsTo(Cliente::class);
    }

    // Relacion uno a muchos (inverso)
    public function persona()
    {
        return $this->belongsTo(Persona::class);
    }

    // Relacion muchos a muchos
    public function entrenamientos_horarios()
    {
        return $this->belongsToMany(Entrenamiento_horario::class);
    }

    // Relacion muchos a muchos
    public function membresias()
    {
        return $this->belongsToMany(Membresia::class);
    }
}
