<x-app-layout>
    <h3 class="text-center pt-4 uppercase font-bold" style="font-size: 2rem;">Nuestros locales</h3>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-4 py-8 contenedor">
        @foreach($locales as $local)
            <div class=" shadow-md rounded-lg overflow-hidden dark:bg-secondary-dark dark:text-secondary-light">
                <img class="w-full h-2/4" src="{{$local->imagenes[0]->url}}" alt="Imagen de propiedad">
                <div class="p-4">
                    <h5 class="text-xl font-semibold mb-2">{{ $local->nombre }}</h5>
                    <p class=" mb-5">
                        <strong>Región:</strong> {{ $local->region->nombre }}<br>
                        <strong>Municipio:</strong> {{ $local->municipio }}<br>
                        <strong>Dirección:</strong> {{ $local->direccion }}<br>
                        <strong>Descripción:</strong> {{ $local->descripcion }}
                    </p>
                    <a href="{{ route('ourlocales.show', $local->idLocal) }}" class="bg-stone-700 hover:bg-stone-900 text-white font-bold p-2 ">Ver Local</a>
                </div>
            </div>
        @endforeach
    </div>
</x-app-layout>
