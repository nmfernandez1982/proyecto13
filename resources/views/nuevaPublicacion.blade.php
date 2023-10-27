<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-6">
       
                <label for="TipoPublicacion"  class="block text-lg font-semibold text-green-600 uppercase ">Tipo Publicacion
                    
                    <select name="TipoPublicacion" id="TipoPublicacion" class="appearance-none block w-full  text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" >
                            @foreach ($tipoP as $tipo)                               
                                 <option {{ ( old('TipoPublicacion')==$tipo->id )?'selected':'' }} value="{{ $tipo->id }}">{{ $tipo->tipo_publicacion }}</option>
                            @endforeach                         
                    </select>  

                </label>
                <label for="TipoMascota" class="block text-lg font-semibold text-green-600 uppercase ">Categoria
                    <select name="TipoMascota" id="TipoMascota" class="appearance-none block w-full  text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" >
                        @foreach ($tipoM as $tipo)   
                            <option {{ ( old('TipoMascota')==$tipo->id )?'selected':'' }} value="{{ $tipo->id }}">{{ $tipo->tipo_mascota }}</option>
                        @endforeach 
                    </select>                
                </label>
                <label for="email" class="block text-lg font-semibold text-green-600 uppercase ">Categoria
                    <select name="" id="" class="appearance-none block w-full  text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" >
                        <option value="">Buenos Aires</option>
                        <option value="">Cordoba</option>
                    </select>                
                </label>

                <label for="email" class="block text-lg font-semibold text-green-600 uppercase ">Categoria
                    <select name="" id="" class="appearance-none block w-full  text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" >
                        <option value="">Quilmes</option>
                        <option value="">Berazategui</option>
                    </select>                
                </label>
                <label for="email" class="block text-lg font-semibold text-green-600 uppercase ">Nombre 
                        <input type="text" class="appearance-none block w-full  text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
                </label>
                <label for="email" class="block text-lg font-semibold text-green-600 uppercase ">Imagen 
                    <input type="file" class="appearance-none block w-full  text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
                </label>

                <label for="" class="block text-lg font-semibold text-green-600 uppercase ">Comentario
                <textarea name="" id="" cols="20" rows="10" class="appearance-none block w-full  text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500">

                </textarea>
                 </label>
                
               
          
        </div>
    </div>
</x-app-layout>
