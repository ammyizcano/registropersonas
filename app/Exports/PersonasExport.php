<?php

namespace App\Exports;

use App\Models\Persona;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;

class PersonasExport implements FromView,ShouldAutoSize
{
    /**
  
    */
   /* public function headings(): array{
        return [
            'Id',
            'Nombre',
            'Identidad',
            'Celular',
            'Departamento',
            'Imagen',
        ];
    }
    public function collection()
    {
        return Persona::select("id", "nombre", "identidad", "celular", "departamento", "imagen")->get();
    }*/ 
    public function view() : View{
        $persona=Persona::select("id", "nombre", "identidad", "celular", "departamento", "imagen")->get();
                     return view('persona.reporte',['persona' => $persona]);
                    }
}
