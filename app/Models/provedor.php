<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Provedor extends Model
{
    use SoftDeletes;

    protected $table = 'provedores';
    protected $primaryKey = 'id_provedor'; // Cambiado a id_provedor
    protected $fillable = ['id_persona'];

    /**
     * Relación con Persona (entidad fuerte)
     */
    public function persona()
    {
        return $this->belongsTo(Persona::class, 'id_persona', 'id_personas');
    }
}
