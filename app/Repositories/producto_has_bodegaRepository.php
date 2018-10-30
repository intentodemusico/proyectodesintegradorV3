<?php

namespace App\Repositories;

use App\Models\producto_has_bodega;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class producto_has_bodegaRepository
 * @package App\Repositories
 * @version October 30, 2018, 3:58 am UTC
 *
 * @method producto_has_bodega findWithoutFail($id, $columns = ['*'])
 * @method producto_has_bodega find($id, $columns = ['*'])
 * @method producto_has_bodega first($columns = ['*'])
*/
class producto_has_bodegaRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'bodega_idBodega',
        'Cantidad',
        'Producto_Proveedor_idProveedor'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return producto_has_bodega::class;
    }
}
