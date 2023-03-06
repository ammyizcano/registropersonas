<?php

namespace App\Exports;

use App\Models\Persona;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class PersonasExport implements FromCollection,WithHeadings 
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function headings(): array{
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
    }
}
