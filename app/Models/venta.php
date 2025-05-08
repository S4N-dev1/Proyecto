<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Venta extends Model
{
    use SoftDeletes;

    protected $table = 'ventas';
    protected $primaryKey = 'id_venta';
    protected $fillable = [
        'id_cliente',
        'id_empleado',
        'FechaDeVenta',
        'MetodoPagoID',
        'TotalConDescuento'
    ];

    /**
     * Relación con la tabla `clientes`
     */
    public function cliente()
    {
        return $this->belongsTo(Cliente::class, 'id_cliente', 'id_cliente');
    }

    /**
     * Relación con la tabla `empleados`
     */
    public function empleado()
    {
        return $this->belongsTo(Empleado::class, 'id_empleado', 'id_empleado');
    }

    /**
     * Relación con la tabla `metodospagos`
     */
    public function metodospago()
    {
        return $this->belongsTo(metodospago::class, 'MetodoPagoID', 'MetodoPagoID');
    }

}
