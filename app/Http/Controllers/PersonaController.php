<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Persona;
use App\Mail\MessageSended;
use App\Mail\Notification;
use Illuminate\Support\Facades\Mail;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\PersonasExport;

class PersonaController extends Controller
{

    public function exportExcel() {
        return Excel::download(new PersonasExport, 'lista-personas.xlsx');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $persona = Persona::get();
        return view('persona.detalle',['persona'=>$persona]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('persona.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = $request->validate([
            'nombre' => 'required|regex:/[A-Za-z ]+$/|min:3',
            'identidad' => 'required|numeric|digits:13',
            'celular' => 'required|numeric|digits:8',
            'departamento' => 'not_in:Ninguno',
            'imagen' => 'required|image'  
        ]);

        if($rules)  {
            try {
                $persona = new Persona();
                $persona->nombre = $request->get('nombre');
                $persona->identidad = $request->get('identidad');
                $persona->celular = $request->get('celular');
                $persona->departamento = $request->input('departamento');
                if ($request->hasfile('imagen')) {
                    $file = $request->file('imagen');
                    $path = 'app/public/images/';
                    $filename = $file->getClientOriginalName();
                    $upload = $request->file('imagen')->move($path, $filename);
                    $persona->imagen = $path . $filename;
                }
                $persona->save();
                Mail::to('ammy.izcano@ujcv.edu.hn')->send(new Notification($persona));
    
                return redirect('personas/create')->with('store','done');
            } catch (\Throwable $th) {
                dd($th);
                return redirect('personas/create')->with('store','done');
            }
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $persona = Persona::find($id);
        return view('persona.edit')->with('persona', $persona);
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
        $persona = Persona::find($id);
        $persona->nombre = $request->get('nombre');
        $persona->apellido = $request->get('apellido');
        $persona->correo = $request->get('correo');
        $persona->direccion = $request->get('direccion');
        $persona->save();

        return redirect('/personas')->with('update','done');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $persona = Persona::find($id);
        $persona->delete();
        return redirect('/personas')->with('destroy','done');
    }
}