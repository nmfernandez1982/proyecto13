
@livewireScripts
@livewireStyles


<div>
    <h2 class="text-lg font-semibold mb-4">Nueva Publicacion</h2>
    <form action="/agregarPublicacion" method="post" enctype="multipart/form-data"  >
    {{@csrf_field()}}   
      
      <div class="flex items-center">
        <label for="TipoPublicacion"  class="inline-block text-sm font-medium text-gray-700 w-24">Publicacion:</label>          
        <select required  name="TipoPublicacion" id="TipoPublicacion" class="appearance-none inline w-3/4  text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500 mx-auto" > 
                    @foreach ($tipoP as $tipo)                               
                     <option  {{ ( old('TipoPublicacion')==$tipo->id )?'selected':'' }} value="{{ $tipo->id }}">{{ $tipo->descripcion }}</option>
                    @endforeach                         
        </select>      
      </div>     
  
      <br>

      <div class="flex items-center">
      <label for="TipoMascota" class="inline-block text-sm font-medium text-gray-700 w-24">Mascota: </label>
        <select required name="TipoMascota" id="TipoMascota" class="appearance-none inline w-3/4  text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500 mx-auto" >
                    @foreach ($tipoM as $tipo)   
                    <option {{ ( old('TipoMascota')==$tipo->id )?'selected':'' }} value="{{ $tipo->id }}">{{ $tipo->descripcion }}</option>
                    @endforeach 
        </select>        
      </div>

      <br>

      <div class="flex items-center">
        <label for="provincia" class="inline text-sm font-medium text-gray-700 mb-1">Provincia:</label>   
            <select required wire:model="selectedProvincia"  name="provincia" id="provincia" class="appearance-none inline w-3/4  text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500 mx-auto"  >
                    @foreach ($provincias as $provincia)   
                    <option {{ ( old('provincia')==$provincia->id )?'selected':'' }} value="{{ $provincia->id }}">{{ $provincia->nombre }}</option>
                    @endforeach 
            </select>               
      </div>

      <br>

      <div class="flex items-center">       
            @if (!is_null($localidades))
            <label for="localidad" class="inline text-sm font-medium text-gray-700 mb-1">Localidad:</label>  
            <select required wire:model="selectedLocalidad" name="localidad" id="localidad" class="appearance-none inline w-3/4  text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500 mx-auto" >
                @foreach ($localidades as $localidad)   
                    <option {{ ( old('localidades')==$localidad->id )?'selected':'' }} value="{{ $localidad->id }}">{{ $localidad->descripcion }}</option>
                @endforeach              
            </select>      
                @endif             
      </div>

      <br>

      {{-- Input nombre de mascota --}}
      <div class="flex items-center">          
            <label for="nombre" class="inline text-sm font-medium text-gray-700 mb-1">Nombre:</label>             
            <input required type="text" id="nombre" name="nombre" class="appearance-none inline w-3/4  text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500 mx-auto">
      </div>


      <br>
      
      {{-- Input comentario de mascota --}}
      <div class="flex items-center">        
            <label for="comentario"  class="inline text-sm font-medium text-gray-700 mb-1">Comentario:</label>    
            <textarea name="comentario" id="comentario" cols="20" rows="10" class="appearance-none inline w-3/4  text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500 mx-auto"></textarea>
      </div>  

      <br>

      <!--Input imagen de mascota  -->
      <div class="flex items-center">         
            <label for="mensaje" class="inline text-sm font-medium text-gray-700 mb-1">Imagen:</label>   
            <input type="file"  onchange="previewImage()" name="inputMascotaImagen"  id="inputMascotaImagen" class="appearance-none inline w-3/4  text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500 mx-auto">
      </div>   
      

 
      <br>

      <div class="flex items-center">           
            <img src="perritoMalvado.jpg" id="imagenMascota"  class="mx-auto"  name="imagenMascota" style="width: 300px; height: 300px; overflow: hidden;" >            
      </div>   

           
      <button class="bg-green-500 hover:bg-green-600 text-white font-bold py-2 px-4 rounded">Enviar</button>
  

  
    </form>
</div>



    
            

<script>
     function previewImage() {
            const input = document.getElementById('inputMascotaImagen');
            const preview = document.getElementById('imagenMascota');

            const file = input.files[0];
            if (file) 
            {
                const reader = new FileReader();
                reader.onload = function(e) 
                {
                    preview.src = e.target.result;
                    preview.style.display = 'block';
                };
                reader.readAsDataURL(file);
            } 
            else 
            {
                preview.src = 'perritoMalvado.jpg';
                preview.style.display = 'none';
            }
        }

</script>




