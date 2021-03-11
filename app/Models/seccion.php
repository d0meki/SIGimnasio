<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;

class Seccion extends Model
{
    use HasFactory, LogsActivity;
    protected $table = 'seccions';
    protected $fillable=['nombre'];
    public function disciplinas()
    {
        return $this->hasMany(Disciplina::class);
    }
}
