<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class transaccion
 * @package App\Models
 * @version October 30, 2018, 4:02 am UTC
 *
 * @property integer Cantidad
 * @property integer Persona_idPersona
 * @property integer Precio
 * @property integer Producto_idProducto
 * @property string Tipo
 */
class transaccion extends Model
{

    use SoftDeletes;

    public $table = 'transaccions';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'Cantidad',
        'Persona_idPersona',
        'Precio',
        'Producto_idProducto',
        'Tipo'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'Cantidad' => 'integer',
        'idTransaccion' => 'integer',
        'Persona_idPersona' => 'integer',
        'Precio' => 'integer',
        'Producto_idProducto' => 'integer',
        'Tipo' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
