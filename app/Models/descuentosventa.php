<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class descuentosventa extends Model
{
    use SoftDeletes;

    protected $table = 'descuentosventas';
    protected $primaryKey = 'id_descuentoventa';
    protected $fillable = [
        'id_venta',
        'DescuentoID'
    ];

    /**
     * Relación con la tabla `ventas`
     */
    public function venta()
    {
        return $this->belongsTo(Venta::class, 'id_venta', 'id_venta');
    }

    /**
     * Relación con la tabla `descuentos`
     */
    public function descuento()
    {
        return $this->belongsTo(Descuento::class, 'DescuentoID', 'DescuentoID');
    }
}

