<x-app-layout>

    <main class="grid grid-cols-1 md:grid-cols-2">
        <section>
            <img class="w-full h-2/4" src="/images/logo.png" alt="Imagen de propiedad">
            <h2 class="text-2xl font-bold text-center mb-3 mt-3">Otros datos</h2>
            <table class="border border-slate-700 rounded-sm w-full  text-left shadow-md">
                <thead class="bg-principal text-white text-center">
                    <tr>
                        <th class="px-4 py-2">Metros de ancho</th>
                        <th class="px-4 py-2">Metros de largo</th>
                    </tr>
                </thead>
                <tbody class="text-center">
                    <tr class="bg-white even:bg-slate-100">
                        <td class="border px-4 py-2">{{$local->amenidad->anchoMetros}}</td>
                        <td class="border px-4 py-2">{{$local->amenidad->largoMetros}}</td>
                    </tr>
                </tbody>
            </table>
            <div class="grid grid-cols-1 md:grid-cols-2">
                <p class="text-center  text-lg font-bold"> Num baños: <span class="font-normal">{{ $local->amenidad->noBaños }}</span> </p>
                <p class="text-center  text-lg font-bold"> Capicidad max: <span class="font-normal">{{ $local->amenidad->capacidadMax }}</span></p>
                <p class="text-center  text-lg font-bold"> Num mesas: <span class="font-normal">{{ $local->amenidad->noMesas }}</span></p>
                <p class="text-center  text-lg font-bold"> Num sillas: <span class="font-normal">{{ $local->amenidad->noSillas }}</span></p>
                <p class="text-center  text-lg font-bold"> Num parqueos: <span class="font-normal">{{ $local->amenidad->noParques }}</span></p>
                <p class="text-center  text-lg font-bold"> Otras amenidades: <span class="font-normal">{{ $local->amenidad->otrasAmen }}</span></p>
            </div>

        </section>
        <section>
            <h3 class="text-center mt-4 uppercase font-bold" style="font-size: 2rem;"> {{ $local->nombre }}</h3>
            <p class="mt-4 text-lg"> {{ $local->descripcion }}</p>

            <table class="border border-slate-700 rounded-sm w-full  text-left shadow-md">
                <thead class="bg-principal text-white text-center">
                    <tr>
                        <th class="px-4 py-2">Municipio</th>
                        <th class="px-4 py-2">Precio Renta</th>
                        <th class="px-4 py-2">Precio por Hora</th>
                    </tr>
                </thead>
                <tbody class="text-center">
                    <tr class="bg-white even:bg-slate-100">
                        <td class="border px-4 py-2">{{$local->municipio}}</td>
                        <td class="border px-4 py-2">{{$local->precioRenta}}</td>
                        <td class="border px-4 py-2">{{$local->costoHora}}</td>
                    </tr>
                </tbody>
            </table>

            <p class="text-center mt-4 text-lg"> Dirección: {{ $local->direccion }}</p>
            <p class="text-center mt-4 text-lg"> Referencia: {{ $local->referencias }}</p>
        </section>
    </main>
</x-app-layout>