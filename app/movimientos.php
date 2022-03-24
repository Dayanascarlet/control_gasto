<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class movimientos extends Model
{
    //
      protected $table='movimientos';
    protected $primaryKey='mov_id';
    public $timestamps=false;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'mov_id','mov_fecha','mov_cantidad','mov_detalle','mov_tipo'
    ];
}
