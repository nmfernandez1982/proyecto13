<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Provincias;
use App\Models\Localidades;
use App\Models\TipoMascota;
use App\Models\tipo_publicacion;


class ComponenteCiudades extends Component
{
    
    public $selectedProvincia="null";
    public $selectedLocalidad=null;
    public $localidades=null;    

    public function render()
    {
        $tipoP=tipo_publicacion::all()->where('activa', true);
        $tipoM=TipoMascota::all()->where('activa', true);

        return view('livewire.componente-ciudades',
        [
            'provincias'=>Provincias::all(), 
            'tipoP'=>$tipoP,
            'tipoM'=>$tipoM            
        ]);
    }

    public function updatedSelectedProvincia($provincia_id)
    {
        $this->localidades=Localidades::where('provincia_id',$provincia_id)->get();
    }
}
