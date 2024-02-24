<x-app-layout>
     <div class="flex justify-center py-12">{{--paddin superior e inferior  --}}
        {{-- <div class="max-w-7xl mx-auto sm:px-6 lg:px-6"> --}}
        <div class="w-1/2  sm:px-6 lg:px-6">
            <livewire:componente-ciudades />            
        </div>
        <div class="w-1/2  sm:px-6 lg:px-6">
            <label  for="imagenMascota"  class="text-lg font-semibold text-green-600 uppercase ">Imagen </label>
            <img src="perritoMalvado.jpg" id="imagenMascota" name="imagenMascota" style="width: 300px; height: 300px; overflow: hidden;" >            
        </div>
    </div>
</x-app-layout>
