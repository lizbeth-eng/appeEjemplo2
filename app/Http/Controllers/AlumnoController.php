<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\AlumnoModel;
use Illuminate\Database\QueryException;


class AlumnoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        
        $alumnos = AlumnoModel::select('*')->orderBy('idAlumno','ASC');
        $limit=(isset($request->limit)) ? $request->limit:10;
        
        if(isset($request->search)){
            $alumnos=$alumnos->Where('idAlumno','like','%'.$request->search.'%')
            ->orWhere('nombre','like','%'.$request->search.'%')
            ->orWhere('apellidoPaterno','like','%'.$request->search.'%')
            ->orWhere('apellidoMaterno','like','%'.$request->search.'%')
            ->orWhere('numeroControl','like','%'.$request->search.'%')
            ->orWhere('modalidad','like','%'.$request->search.'%');
            
            }
        $alumnos = $alumnos->paginate($limit)->appends($request->all());
        return view('alumnos.index', compact('alumnos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('alumnos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $alumno = new AlumnoModel();
        $alumno = $this->createUpdateAlumno($request, $alumno);
        return redirect()
        ->route('alumnos.index')
        ->with('message', 'Se ha creado el registro correctamente.');

    }
      public function createUpdateAlumno(Request $request, $alumno){
        if($alumno->idAlumno != null){
            AlumnoModel::where('idAlumno', $alumno->idAlumno)->update([
                'nombre'     => $request->get('nombre'),
                'apellidoPaterno' => $request->get('apellidoPaterno'),
                'numeroControl'    => $request->get("numeroControl"),
                'modalidad'    => $request->get("modalidad"),
                ]);
                return $docente;
            }

      $alumno->nombre=$request->nombre;
        $alumno->apellidoPaterno=$request->apellidoPaterno;
        $alumno->apellidoMaterno=$request->apellidoMaterno;
        $alumno->numeroControl=$request->numeroControl;
        $alumno->Modalidad=$request->modalidad;
        $alumno->save();
        return $alumno;
   
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    
        $alumno=AlumnoModel::Where('idAlumno', $id)->firstOrFail();
        return view('alumnos.show', compact('alumno'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $alumno=AlumnoModel::Where('idAlumno', $id)->firstOrFail();
        return view('alumnos.edit', compact('alumno'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $alumno=AlumnoModel::Where('idAlumno', $id)->firstOrFail();
        $alumno=$this->createUpdateAlumno($request, $alumno);
        return redirect()
        ->route('alumnos.index')
        ->with('message', 'Se ha actualizado correctamene el resgistro correctamente.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    /** editar destroy */
    public function destroy($id)
    {
        try{
            AlumnoModel::where('idAlumno',$id)->delete();
              return redirect()
              ->route('alumnos.index')
              ->with('message', 'Registro eliminado  correctamente.');
       }catch(QueryException $e){
         return redirect()
          ->route('alumnos.index')
          ->with('danger', 'Registro  relacionado imposible de eliminar.');
       }    
    }
}
