<?php

namespace App\Repositories;

use App\Models\producto;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class productoRepository
 * @package App\Repositories
 * @version October 30, 2018, 3:56 am UTC
 *
 * @method producto findWithoutFail($id, $columns = ['*'])
 * @method producto find($id, $columns = ['*'])
 * @method producto first($columns = ['*'])
*/
class productoRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'PrecioCompra',
        'PrecioVenta',
        'producto_has_bodega_bodega_idBodega',
        'proveedor_idProveedor',
        'Referencia',
        'tipo_producto_idTipo_Producto',
        'Year'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return producto::class;
    }
}
