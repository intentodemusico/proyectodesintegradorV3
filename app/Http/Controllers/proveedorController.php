<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateproveedorRequest;
use DB;
use App\Http\Requests\UpdateproveedorRequest;
use App\Repositories\proveedorRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class proveedorController extends AppBaseController
{
    /** @var  proveedorRepository */
    private $proveedorRepository;

    public function __construct(proveedorRepository $proveedorRepo)
    {
        $this->proveedorRepository = $proveedorRepo;
    }

    /**
     * Display a listing of the proveedor.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    
    {  


        $proveedors  = DB::connection('mysql')->select('select * from proveedors');
        return view('proveedors.index')
        ->with('proveedors', $proveedors);


    }

    /**
     * Show the form for creating a new proveedor.
     *
     * @return Response
     */
    public function create()
    {
        return view('proveedors.create');
    }

    /**
     * Store a newly created proveedor in storage.
     *
     * @param CreateproveedorRequest $request
     *
     * @return Response
     */
    public function store(CreateproveedorRequest $request)
    {
        $input = $request->all();

        $proveedor = $this->proveedorRepository->create($input);

        Flash::success('Proveedor saved successfully.');

        return redirect(route('proveedors.index'));
    }

    /**
     * Display the specified proveedor.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $proveedor = $this->proveedorRepository->findWithoutFail($id);

        if (empty($proveedor)) {
            Flash::error('Proveedor not found');

            return redirect(route('proveedors.index'));
        }

        return view('proveedors.show')->with('proveedor', $proveedor);
    }

    /**
     * Show the form for editing the specified proveedor.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $proveedor = $this->proveedorRepository->findWithoutFail($id);

        if (empty($proveedor)) {
            Flash::error('Proveedor not found');

            return redirect(route('proveedors.index'));
        }

        return view('proveedors.edit')->with('proveedor', $proveedor);
    }

    /**
     * Update the specified proveedor in storage.
     *
     * @param  int              $id
     * @param UpdateproveedorRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateproveedorRequest $request)
    {
        $proveedor = $this->proveedorRepository->findWithoutFail($id);

        if (empty($proveedor)) {
            Flash::error('Proveedor not found');

            return redirect(route('proveedors.index'));
        }

        $proveedor = $this->proveedorRepository->update($request->all(), $id);

        Flash::success('Proveedor updated successfully.');

        return redirect(route('proveedors.index'));
    }

    /**
     * Remove the specified proveedor from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $proveedor = $this->proveedorRepository->findWithoutFail($id);

        if (empty($proveedor)) {
            Flash::error('Proveedor not found');

            return redirect(route('proveedors.index'));
        }

        $this->proveedorRepository->delete($id);

        Flash::success('Proveedor deleted successfully.');

        return redirect(route('proveedors.index'));
    }
}
