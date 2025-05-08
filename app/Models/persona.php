<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Persona extends Model
{
    use SoftDeletes;

    protected $table = 'personas';
    protected $primaryKey = 'id_personas';
    protected $fillable = ['Nombre', 'ap', 'am'];

    /**
     * Relación con Provedor
     */
    public function provedor()
    {
        return $this->hasMany(Provedor::class, 'id_persona', 'id_personas');
    }
}
