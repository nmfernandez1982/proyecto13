

 
  <x-app-layout>
    <div class="flex justify-center py-12">{{--paddin superior e inferior  --}}
        
     
      
      <table class="table-fixed min-w-full text-left text-sm font-light">
            <thead
            class="text-md font-semibold tracking-wide text-left text-gray-900 bg-gray-100 uppercase border-b border-gray-600">
              <tr style="text-align: center">
               
                <th scope="col" class="px-6 py-4">Tipo</th>
                <th scope="col" class="px-6 py-4">Cat.</th>
                <th scope="col" class="px-6 py-4">Prov.</th>
                <th scope="col" class="px-6 py-4">Loc.</th>
                <th scope="col" class="px-6 py-4">Mascota</th>
                <th scope="col" class="px-6 py-4">Comentario</th>
                <th scope="col" class="px-6 py-4">Imagen</th>
                <th scope="col" class="px-6 py-4">Actualizar</th>
                <th scope="col" class="px-6 py-4">Eliminar</th>
              </tr>
            </thead>
            <tbody>
                @foreach( $publicaciones as $publicacion )
                <tr class="border-b bg-white dark:border-neutral-500 dark:bg-neutral-600">
                    <td class="px-4 py-3 border" >{{ $publicacion->getTipoPublicacion->tipo_publicacion }}</td>
                    <td class="px-4 py-3 border" >{{ $publicacion->getTipoMascota->tipo_mascota }}</td>
                    <td class="w-24 truncate md:text-clip" >{{ $publicacion->getProvincia->nombre }}</td>
                    <td class="px-4 py-3 border" >{{ $publicacion->getLocalidad->nombre }}</td>
                    <td class="px-4 py-3 border" >{{ $publicacion->nombre }}</td>
                    <td class="px-4 py-3 border" style="max-width: 10%;text-overflow: ellipsis;" >{{ $publicacion->comentario }}</td>


                    <td class="px-4 py-3 border"><img src="publicaciones/{{$publicacion->imagen}}" ></td>
               
              
                    <td class="px-4 py-3 border" style="text-align: center">                      
                        <a href="/modificarPublicacion/{{ $publicacion->id }}" class="btn btn-outline-secondary">
                          <i class="fa-solid fa-right-left"> </i>
                      </a>                     
                    </td>
                    <td class="px-4 py-3 border" style="text-align: center">                      
                      <a href="/eliminarPublicacion/{{ $publicacion->id }}" class="btn btn-outline-secondary">
                        <i class="fa-regular fa-rectangle-xmark"></i>
                    </a>                     
                  </td>
                   
                
                  </tr>   
                @endforeach
            </tbody>
        </table>       
   </div>
@if ( session('mensaje') )
<div class="flex justify-center bg-orange-100 border-l-4 border-orange-500 text-orange-700 p-4" role="alert">
  {{ session('mensaje') }}
</div>      
@endif
</x-app-layout>
