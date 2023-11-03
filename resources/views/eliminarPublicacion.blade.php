<x-app-layout>
        <div class="flex justify-center py-12">{{--paddin superior e inferior  --}}
            <form action="/eliminarPublicacion" method="post">
                @method('delete')
                @csrf
                <h2 class="text-lg font-semibold text-green-600 uppercase">{{ $publicaciones->nombre }}</h2>
                            
                <div class="w-1/2  sm:px-6 lg:px-6">
                    <label  for="imagenMascota"  class="text-lg font-semibold text-green-600 uppercase ">Imagen </label>
                    <input type="hidden" value="{{$publicaciones->id}}" id="id" name="id">
                    <img src="publicaciones/{{$publicaciones->imagen}}" >            
                </div>    
            
            
            <input type="submit" value="Eliminar" >
            
            </form>
        </div>
    </x-app-layout>