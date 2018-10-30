<?php

namespace App\Http\Controllers;

use App\Http\Requests\Createproducto_has_bodegaRequest;
use App\Http\Requests\Updateproducto_has_bodegaRequest;
use App\Repositories\producto_has_bodegaRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class producto_has_bodegaController extends AppBaseController
{
    /** @var  producto_has_bodegaRepository */
    private $productoHasBodegaRepository;

    public function __construct(producto_has_bodegaRepository $productoHasBodegaRepo)
    {
        $this->productoHasBodegaRepository = $productoHasBodegaRepo;
    }

    /**
     * Display a listing of the producto_has_bodega.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->productoHasBodegaRepository->pushCriteria(new RequestCriteria($request));
        $productoHasBodegas = $this->productoHasBodegaRepository->all();

        return view('producto_has_bodegas.index')
            ->with('productoHasBodegas', $productoHasBodegas);
    }

    /**
     * Show the form for creating a new producto_has_bodega.
     *
     * @return Response
     */
    public function create()
    {
        return view('producto_has_bodegas.create');
    }

    /**
     * Store a newly created producto_has_bodega in storage.
     *
     * @param Createproducto_has_bodegaRequest $request
     *
     * @return Response
     */
    public function store(Createproducto_has_bodegaRequest $request)
    {
        $input = $request->all();

        $productoHasBodega = $this->productoHasBodegaRepository->create($input);

        Flash::success('Producto Has Bodega saved successfully.');

        return redirect(route('productoHasBodegas.index'));
    }

    /**
     * Display the specified producto_has_bodega.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $productoHasBodega = $this->productoHasBodegaRepository->findWithoutFail($id);

        if (empty($productoHasBodega)) {
            Flash::error('Producto Has Bodega not found');

            return redirect(route('productoHasBodegas.index'));
        }

        return view('producto_has_bodegas.show')->with('productoHasBodega', $productoHasBodega);
    }

    /**
     * Show the form for editing the specified producto_has_bodega.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $productoHasBodega = $this->productoHasBodegaRepository->findWithoutFail($id);

        if (empty($productoHasBodega)) {
            Flash::error('Producto Has Bodega not found');

            return redirect(route('productoHasBodegas.index'));
        }

        return view('producto_has_bodegas.edit')->with('productoHasBodega', $productoHasBodega);
    }

    /**
     * Update the specified producto_has_bodega in storage.
     *
     * @param  int              $id
     * @param Updateproducto_has_bodegaRequest $request
     *
     * @return Response
     */
    public function update($id, Updateproducto_has_bodegaRequest $request)
    {
        $productoHasBodega = $this->productoHasBodegaRepository->findWithoutFail($id);

        if (empty($productoHasBodega)) {
            Flash::error('Producto Has Bodega not found');

            return redirect(route('productoHasBodegas.index'));
        }

        $productoHasBodega = $this->productoHasBodegaRepository->update($request->all(), $id);

        Flash::success('Producto Has Bodega updated successfully.');

        return redirect(route('productoHasBodegas.index'));
    }

    /**
     * Remove the specified producto_has_bodega from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $productoHasBodega = $this->productoHasBodegaRepository->findWithoutFail($id);

        if (empty($productoHasBodega)) {
            Flash::error('Producto Has Bodega not found');

            return redirect(route('productoHasBodegas.index'));
        }

        $this->productoHasBodegaRepository->delete($id);

        Flash::success('Producto Has Bodega deleted successfully.');

        return redirect(route('productoHasBodegas.index'));
    }
}
