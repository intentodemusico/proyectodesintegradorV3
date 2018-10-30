<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatetransaccionRequest;
use App\Http\Requests\UpdatetransaccionRequest;
use App\Repositories\transaccionRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class transaccionController extends AppBaseController
{
    /** @var  transaccionRepository */
    private $transaccionRepository;

    public function __construct(transaccionRepository $transaccionRepo)
    {
        $this->transaccionRepository = $transaccionRepo;
    }

    /**
     * Display a listing of the transaccion.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->transaccionRepository->pushCriteria(new RequestCriteria($request));
        $transaccions = $this->transaccionRepository->all();

        return view('transaccions.index')
            ->with('transaccions', $transaccions);
    }

    /**
     * Show the form for creating a new transaccion.
     *
     * @return Response
     */
    public function create()
    {
        return view('transaccions.create');
    }

    /**
     * Store a newly created transaccion in storage.
     *
     * @param CreatetransaccionRequest $request
     *
     * @return Response
     */
    public function store(CreatetransaccionRequest $request)
    {
        $input = $request->all();

        $transaccion = $this->transaccionRepository->create($input);

        Flash::success('Transaccion saved successfully.');

        return redirect(route('transaccions.index'));
    }

    /**
     * Display the specified transaccion.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $transaccion = $this->transaccionRepository->findWithoutFail($id);

        if (empty($transaccion)) {
            Flash::error('Transaccion not found');

            return redirect(route('transaccions.index'));
        }

        return view('transaccions.show')->with('transaccion', $transaccion);
    }

    /**
     * Show the form for editing the specified transaccion.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $transaccion = $this->transaccionRepository->findWithoutFail($id);

        if (empty($transaccion)) {
            Flash::error('Transaccion not found');

            return redirect(route('transaccions.index'));
        }

        return view('transaccions.edit')->with('transaccion', $transaccion);
    }

    /**
     * Update the specified transaccion in storage.
     *
     * @param  int              $id
     * @param UpdatetransaccionRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatetransaccionRequest $request)
    {
        $transaccion = $this->transaccionRepository->findWithoutFail($id);

        if (empty($transaccion)) {
            Flash::error('Transaccion not found');

            return redirect(route('transaccions.index'));
        }

        $transaccion = $this->transaccionRepository->update($request->all(), $id);

        Flash::success('Transaccion updated successfully.');

        return redirect(route('transaccions.index'));
    }

    /**
     * Remove the specified transaccion from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $transaccion = $this->transaccionRepository->findWithoutFail($id);

        if (empty($transaccion)) {
            Flash::error('Transaccion not found');

            return redirect(route('transaccions.index'));
        }

        $this->transaccionRepository->delete($id);

        Flash::success('Transaccion deleted successfully.');

        return redirect(route('transaccions.index'));
    }
}
