<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\PersonalAcademicoModel;
use Illuminate\Database\QueryException;


class PersonalAcademicoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        
        $personal_academicos = PersonalAcademicoModel::select('*')->orderBy('idPersonalAcademico','ASC');
        $limit=(isset($request->limit)) ? $request->limit:10;
        
        if(isset($request->search)){
            $personal_academicos=$v->Where('idPersonalAcademico','like','%'.$request->search.'%')
            ->orWhere('nombre','like','%'.$request->search.'%')
            ->orWhere('apellidoPaterno','like','%'.$request->search.'%')
            ->orWhere('apellidoMaterno','like','%'.$request->search.'%')
            ->orWhere('cargoAcademico','like','%'.$request->search.'%')
            ->orWhere('departamento','like','%'.$request->search.'%');
            
            }
        $personal_academicos = $personal_academicos->paginate($limit)->appends($request->all());
        return view('personal_academicos.index', compact('personal_academicos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('personal_academicos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $personal_academico = new PersonalAcademicoModel();
        $personal_academico = $this->createUpdatePersonal_academico($request, $personal_academico);
        return redirect()
        ->route('personal_academicos.index')
        ->with('message', 'Se ha creado el registro correctamente.');

    }
      public function createUpdatePersonal_academico(Request $request, $personal_academico){
        if($personal_academico->idPersonalAcademico != null){
            PersonalAcademicoModel::where('idPersonalAcademico', $personal_academico->idPersonalAcdemico)->update([
                'nombre'     => $request->get('nombre'),
                'apellidoPaterno' => $request->get('apellidoPaterno'),
                'apellidoMaterno'    => $request->get("apellidoMaterno"),
                'cargoAcademico'    => $request->get("cargoAcademico"),
                'departamento'    => $request->get("departamento"),
                ]);
                return $personal_academico;
            }

      $personal_academico->nombre=$request->nombre;
        $personal_academico->apellidoPaterno=$request->apellidoPaterno;
        $personal_academico->apellidoMaterno=$request->apellidoMaterno;
        $personal_academico->cargoAcademico=$request->cargoAcademico;
        $personal_academico->departamento=$request->departamento;
        $personal_academico->save();
        return $personal_academico;
   
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    
        $personal_academico=PersonalAcademicoModel::Where('idPersonalAcademico', $id)->firstOrFail();
        return view('personal_academicos.show', compact('personal_academico'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $personal_academico=PersonalAcademicoModel::Where('idPersonalAcademico', $id)->firstOrFail();
        return view('personal_academico.edit', compact('personal_academico'));

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
        $personal_academico=PersonalAcdemicoModel::Where('idPersonalAcademico', $id)->firstOrFail();
        $personal_academico=$this->createUpdatePersonal_academico($request, $personal_academico);
        return redirect()
        ->route('personal_academicos.index')
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
            PersonalAcademicoModel::where('idPersonalAcademico',$id)->delete();
              return redirect()
              ->route('personal_aacademicos.index')
              ->with('message', 'Registro eliminado  correctamente.');
       }catch(QueryException $e){
         return redirect()
          ->route('personal_academicos.index')
          ->with('danger', 'Registro  relacionado imposible de eliminar.');
       }    
    }
}
