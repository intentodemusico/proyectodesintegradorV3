<?php

namespace App\Repositories;

use App\Models\proveedor;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class proveedorRepository
 * @package App\Repositories
 * @version October 30, 2018, 4:00 am UTC
 *
 * @method proveedor findWithoutFail($id, $columns = ['*'])
 * @method proveedor find($id, $columns = ['*'])
 * @method proveedor first($columns = ['*'])
*/
class proveedorRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'Correo',
        'Location',
        'Nombre',
        'Telefono'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return proveedor::class;
    }
}
