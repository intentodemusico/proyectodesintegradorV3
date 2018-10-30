<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class producto_has_bodega
 * @package App\Models
 * @version October 30, 2018, 3:58 am UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection transaccion
 * @property integer bodega_idBodega
 * @property integer Cantidad
 * @property integer Producto_Proveedor_idProveedor
 */
class producto_has_bodega extends Model
{
    protected $connection = 'mysql';
    
    use SoftDeletes;

    public $table = 'producto_has_bodegas';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'bodega_idBodega',
        'Cantidad',
        'Producto_Proveedor_idProveedor'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'bodega_idBodega' => 'integer',
        'Cantidad' => 'integer',
        'Producto_idProducto' => 'integer',
        'Producto_Proveedor_idProveedor' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
