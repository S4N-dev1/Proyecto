<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class empleado extends Model
{
    use SoftDeletes;

    protected $table = 'empleados';
    protected $primaryKey = 'id_empleado';
    protected $fillable = ['id_persona', 'departamento', 'salario', 'fechaContratacion'];
    protected $dates = ['fechaContratacion'];

    /**
     * Relación con la tabla `personas`
     */
    public function persona()
    {
        return $this->belongsTo(Persona::class, 'id_persona', 'id_personas');
    }
}
