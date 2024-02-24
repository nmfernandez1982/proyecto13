<?php

namespace App\Http\Controllers;
use App\Models\Publicaciones;
use Illuminate\Http\Request;
use App\Models\tipo_publicacion;
use App\Models\TipoMascota;
use App\Models\Provincias;
use Illuminate\Support\Facades\Auth;

class PublicacionesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Auth::check()) 
        {
            $userId = Auth::id();
            $publicaciones = Publicaciones::where('id_user',  $userId)->with(['getTipoPublicacion','getTipoMascota','getProvincia','getLocalidad'])->paginate(6);
            return view('misPublicaciones',['publicaciones' => $publicaciones ]);
        }  
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Publicacion',
        [
                       
        ]);
    }

    private function subirImagen(Request $request)
     {
         //si no enviaron imagen en store()
         $publicacionImagen = 'perritoMalvado.jpg';
 
         //si no enviaron imagen en update()
         if( $request->has('inputMascotaImagen') ){
             $publicacionImagen = $request->imgActual;
         }
 
         //si enviaron imagen
         if ( $request->file('inputMascotaImagen') ){
             #renombrar archivo
             //time() . extension
             $extension = $request->file('inputMascotaImagen')->extension();
             $publicacionImagen = time().'.'.$extension;
             #subir archivo
             $request->file('inputMascotaImagen')
                     ->move( public_path('publicaciones/'), $publicacionImagen );
         }
         return $publicacionImagen;
     }




    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         //subo la imagen
       $publicacionImagen = $this->subirImagen($request);
       //creo un nuevo objeto
       $publicacion=new NuevaPublicacion;
       
       if (Auth::check()) 
       {         
        $publicacion->id_user =Auth::id();
        $publicacion->id_tipo_publicacion=$request->TipoPublicacion;      
       $publicacion->id_tipo_mascota=$request->TipoMascota;
       $publicacion->id_provincia=$request->provincia;
       $publicacion->id_localidad=$request->localidad;
       $publicacion->nombre=$request->nombre;
       $publicacion->imagen=$publicacionImagen;
       $publicacion->comentario=$request->comentario;      
       //guardar
       $publicacion->save();
       }

       
       
       //retornar redirección con mensaje ok
       return redirect('dashboard');
                  // ->with(['mensaje'=>'Producto: '.$request->prdNombre.' agregado correctamente.' ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Publicaciones  $publicaciones
     * @return \Illuminate\Http\Response
     */
    public function show(Publicaciones $publicaciones)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Publicaciones  $publicaciones
     * @return \Illuminate\Http\Response
     */
    public function edit(Publicaciones $publicaciones)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Publicaciones  $publicaciones
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Publicaciones $publicaciones)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Publicaciones  $publicaciones
     * @return \Illuminate\Http\Response
     */
    public function destroy(Publicaciones $publicaciones)
    {
        NuevaPublicacion::destroy( $request->id);
        return redirect('misPublicaciones')
        ->with(['mensaje'=>'Producto: '.$request->nombre.' Se elimino la publicacion' ]);
        ;
    }

    public function confirmarBaja( $id )
    {
             $publicacion = NuevaPublicacion::all()->find($id);
            return view('eliminarPublicacion',['publicaciones' => $publicacion ])  ;          
    }
}
