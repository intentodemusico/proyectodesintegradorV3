<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class proveedor
 * @package App\Models
 * @version October 30, 2018, 4:00 am UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection transaccion
 * @property string Correo
 * @property string Location
 * @property string Nombre
 * @property string Telefono
 */
class proveedor extends Model
{
    use SoftDeletes;

    public $table = 'proveedors';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'Correo',
        'Location',
        'Nombre',
        'Telefono'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'Correo' => 'string',
        'idProveedor' => 'integer',
        'Location' => 'string',
        'Nombre' => 'string',
        'Telefono' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
