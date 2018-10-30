<?php

namespace App\Repositories;

use App\Models\transaccion;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class transaccionRepository
 * @package App\Repositories
 * @version October 30, 2018, 4:02 am UTC
 *
 * @method transaccion findWithoutFail($id, $columns = ['*'])
 * @method transaccion find($id, $columns = ['*'])
 * @method transaccion first($columns = ['*'])
*/
class transaccionRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'Cantidad',
        'Persona_idPersona',
        'Precio',
        'Producto_idProducto',
        'Tipo'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return transaccion::class;
    }
}
