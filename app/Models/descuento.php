<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class descuento extends Model
{
    use SoftDeletes;
    protected $table = 'descuentos';
    protected $primaryKey = 'DescuentoID';

    protected $fillable = ['TipoDescuento','MontoDescuento'];
}
