<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatepersonaRequest;
use App\Http\Requests\UpdatepersonaRequest;
use App\Repositories\personaRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use App\Models\persona;
use Flash;
use DB;
use ON;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class personaController extends AppBaseController
{
    /** @var  personaRepository */
    private $personaRepository;

    public function __construct(personaRepository $personaRepo)
    {
        $this->personaRepository = $personaRepo;
    }

    /**
     * Display a listing of the persona.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {   
        
        $personas= DB::connection('mysql')->select('select * from personas');

        return view('personas.index')
            ->with('personas', $personas);
    }

    /**
     * Show the form for creating a new persona.
     *
     * @return Response
     */
    public function create()
    {
        return view('personas.create');
    }

    /**
     * Store a newly created persona in storage.
     *
     * @param CreatepersonaRequest $request
     *
     * @return Response
     */
    public function store(CreatepersonaRequest $request)
    {
        $input = $request->all();
        //onnection('mysql')-> 
        $connection = 'mysql';

$db = DB::connection($connection);
        
        $persona = $this->personaRepository->$db->create($input);
        
        Flash::success('Persona saved successfully.');

        return redirect(route('personas.index'));
    }

    /**
     * Display the specified persona.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($idPersona)
    {
        $persona = DB::connection('mysql')->$this->personaRepository->findWithoutFail($idPersona);

        if (empty($persona)) {
            Flash::error('Persona not found');

            return redirect(route('personas.index'));
        }

        return view('personas.show')->with('persona', $persona);
    }

    /**
     * Show the form for editing the specified persona.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($idPersona)
    {

        $persona = persona::on('mysql')->find($idPersona);//DB::connection('mysql')->select('select * from personas where idPersona=$idPersona');
        //
        
        if (empty($persona)) {
            Flash::error('Persona not found');

            return redirect(route('personas.index'));
        }

        return view('personas.edit')->with('persona', $persona);
    }

    /**
     * Update the specified persona in storage.
     *
     * @param  int              $id
     * @param UpdatepersonaRequest $request
     *
     * @return Response
     */
    public function update($idPersona, UpdatepersonaRequest $request)
    {
        $persona = DB::connection('mysql')->$this->personaRepository->findWithoutFail($idPersona);

        if (empty($persona)) {
            Flash::error('Persona not found');

            return redirect(route('personas.index'));
        }

        $persona = DB::connection('mysql')->$this->personaRepository->update($request->all(), $idPersona);

        Flash::success('Persona updated successfully.');

        return redirect(route('personas.index'));
    }

    /**
     * Remove the specified persona from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($idPersona)
    {
        $persona = DB::connection('mysql')->$this->personaRepository->findWithoutFail($idPersona);

        if (empty($persona)) {
            Flash::error('Persona not found');

            return redirect(route('personas.index'));
        }

        DB::connection('mysql')->$this->personaRepository->delete($idPersona);

        Flash::success('Persona deleted successfully.');

        return redirect(route('personas.index'));
    }
}
