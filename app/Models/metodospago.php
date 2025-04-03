<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class metodospago extends Model
{

    use SoftDeletes;
    protected $table = 'metodospagos';
    protected $primaryKey = 'MetodoPagoID';

    protected $fillable = ['NombreMetods','Descripcion'];
}
