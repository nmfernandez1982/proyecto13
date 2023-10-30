<div>
@livewireScripts
@livewireStyles

<form action="" method="" enctype="multipart/form-data" class="" >
    {{@csrf_field()}}
        {{-- Select tipo publicacion --}}
        <label  for="TipoPublicacion"  class="block text-lg font-semibold text-green-600 uppercase ">Tipo Publicacion
                <select required  name="TipoPublicacion" id="TipoPublicacion" class="appearance-none block w-full  text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" >
                    @foreach ($tipoP as $tipo)                               
                    <option {{ ( old('TipoPublicacion')==$tipo->id )?'selected':'' }} value="{{ $tipo->id }}">{{ $tipo->tipo_publicacion }}</option>
                    @endforeach                         
                </select>  
        </label>

        {{-- Select tipo Mascota --}}
        <label for="TipoMascota" class="block text-lg font-semibold text-green-600 uppercase ">Categoria
                <select required name="TipoMascota" id="TipoMascota" class="appearance-none block w-full  text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" >
                    @foreach ($tipoM as $tipo)   
                    <option {{ ( old('TipoMascota')==$tipo->id )?'selected':'' }} value="{{ $tipo->id }}">{{ $tipo->tipo_mascota }}</option>
                    @endforeach 
                </select>                
        </label>

        {{-- Select tipo provincia --}}
        <label for="provincia" class="block text-lg font-semibold text-green-600 uppercase ">Provincia
                <select required wire:model="selectedProvincia"  name="provincia" id="provincia" class="appearance-none block w-full  text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"  >
                    @foreach ($provincias as $provincia)   
                    <option {{ ( old('provincia')==$provincia->id )?'selected':'' }} value="{{ $provincia->id }}">{{ $provincia->nombre }}</option>
                    @endforeach 
                </select>   
        </label>


@if (!is_null($localidades))
    <label for="localidades" class="block text-lg font-semibold text-green-600 uppercase ">Ciudad
            <select required wire:model="selectedLocalidad" name="localidad" id="localidad" class="appearance-none block w-full  text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" >
                @foreach ($localidades as $localidad)   
                    <option {{ ( old('localidades')==$localidad->id )?'selected':'' }} value="{{ $localidad->id }}">{{ $localidad->nombre }}</option>
                @endforeach              
            </select>                
    </label>
@endif

{{-- Input nombre de mascota --}}
<label for="nombre" class="block text-lg font-semibold text-green-600 uppercase ">Nombre 
    <input required type="text" class="appearance-none block w-full  text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
</label>
{{-- Input imagen de mascota --}}
<label data-browse="Buscar en disco" for="inputMascotaImagen" class="block text-lg font-semibold text-green-600 uppercase ">Imagen 
<input type="file"  onchange="previewImage()" name="inputMascotaImagen"  id="inputMascotaImagen" class="appearance-none block w-full  text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
</label>
{{-- Input comentario de mascota --}}
<label for="" class="block text-lg font-semibold text-green-600 uppercase ">Comentario
<textarea name="" id="" cols="20" rows="10" class="appearance-none block w-full  text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
</textarea>
</label>
<br>
        <button type="submit" class="bg-white hover:bg-gray-100 text-gray-800 font-semibold py-2 px-4 border border-gray-400 rounded shadow">
                guardar
        </button>

        <button type="reset" class="bg-white hover:bg-gray-100 text-gray-800 font-semibold py-2 px-4 border border-gray-400 rounded shadow">
            borrar
        </button>


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
</form>
</div>


