<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class persona extends Model
{
    use SoftDeletes;
    protected $table = 'personas';
    protected $primaryKey = 'id_personas';

    protected $fillable = ['Nombre','ap','am'];

}
