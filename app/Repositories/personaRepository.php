<?php

namespace App\Repositories;

use App\Models\persona;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class personaRepository
 * @package App\Repositories
 * @version October 30, 2018, 3:59 am UTC
 *
 * @method persona findWithoutFail($id, $columns = ['*'])
 * @method persona find($id, $columns = ['*'])
 * @method persona first($columns = ['*'])
*/
class personaRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'Apellido',
        'Cedula',
        'Direccion',
        'Nombre',
        'Telefono',
        'Tipo_Persona_idTipo_Persona'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return persona::class;
    }
}
