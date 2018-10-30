<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class persona
 * @package App\Models
 * @version October 30, 2018, 3:59 am UTC
 *
 * @property string Apellido
 * @property string Cedula
 * @property string Direccion
 * @property string Nombre
 * @property string Telefono
 * @property integer Tipo_Persona_idTipo_Persona
 */
class persona extends Model
{
    protected $connection = 'mysql';
    use SoftDeletes;

    public $table = 'personas';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'Apellido',
        'Cedula',
        'Direccion',
        'Nombre',
        'Telefono',
        'Tipo_Persona_idTipo_Persona'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'Apellido' => 'string',
        'Cedula' => 'string',
        'Direccion' => 'string',
        'idPersona' => 'integer',
        'Nombre' => 'string',
        'Telefono' => 'string',
        'Tipo_Persona_idTipo_Persona' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
