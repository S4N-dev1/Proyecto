<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Storage;

class Persona extends Model
{
    use SoftDeletes;

    protected $table = 'personas';
    protected $primaryKey = 'id_personas';
    protected $fillable = ['Nombre', 'ap', 'am', 'foto'];

    /**
     * Relación con Provedor
     */
    public function provedor()
    {
        return $this->hasMany(Provedor::class, 'id_persona', 'id_personas');
    }

    /**
     *
     */
    public function getFotoUrlAttribute()
    {
        return $this->foto ? asset('storage/' . $this->foto) : null;
    }

}
