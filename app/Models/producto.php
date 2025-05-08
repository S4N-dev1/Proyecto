<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Producto extends Model
{
    use SoftDeletes;

    protected $table = 'productos';
    protected $primaryKey = 'id_producto';
    protected $fillable = ['id_provedor', 'nombre', 'codigobarras', 'descripcion', 'precio', 'existencias'];

    /**
     * Relación con la tabla `provedores`
     */
    public function provedor()
    {
        return $this->belongsTo(Provedor::class, 'id_provedor', 'id_provedor');
    }
}
