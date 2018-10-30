<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class producto
 * @package App\Models
 * @version October 30, 2018, 3:56 am UTC
 *
 * @property integer PrecioCompra
 * @property integer PrecioVenta
 * @property integer producto_has_bodega_bodega_idBodega
 * @property integer proveedor_idProveedor
 * @property string Referencia
 * @property integer tipo_producto_idTipo_Producto
 * @property integer Year
 */
class producto extends Model
{
    protected $connection = 'mysql';
    
    use SoftDeletes;

    public $table = 'productos';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'PrecioCompra',
        'PrecioVenta',
        'producto_has_bodega_bodega_idBodega',
        'proveedor_idProveedor',
        'Referencia',
        'tipo_producto_idTipo_Producto',
        'Year'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'idProducto' => 'integer',
        'PrecioCompra' => 'integer',
        'PrecioVenta' => 'integer',
        'producto_has_bodega_bodega_idBodega' => 'integer',
        'proveedor_idProveedor' => 'integer',
        'Referencia' => 'string',
        'tipo_producto_idTipo_Producto' => 'integer',
        'Year' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
    
}
