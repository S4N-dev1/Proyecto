<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Producto extends Model
{
    use SoftDeletes;

    protected $table = 'productos';
    protected $primaryKey = 'id_producto';
    protected $fillable = ['id_provedor', 'nombre', 'codigobarras', 'descripcion', 'precio', 'existencias', 'foto'];

    /**
     * Relación con la tabla `provedores`
     */
    public function provedor()
    {
        return $this->belongsTo(Provedor::class, 'id_provedor', 'id_provedor');
    }

    /**
     * Accesor para obtener la URL completa de la foto
     */
    public function getFotoUrlAttribute()
    {
        if ($this->foto) {

            if (filter_var($this->foto, FILTER_VALIDATE_URL)) {
                return $this->foto;
            }


            return asset('storage/' . $this->foto);
        }


        return asset('images/default-producto.png');
    }
}
