<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class cliente extends Model
{
    use SoftDeletes;

    protected $table = 'clientes';
    protected $primaryKey = 'id_cliente'; // Cambiado a id_provedor
    protected $fillable = ['id_persona'];

    /**
     * Relación con Persona (entidad fuerte)
     */
    public function persona()
    {
        return $this->belongsTo(Persona::class, 'id_persona', 'id_personas');
    }
}
