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
            <div class="grid grid-cols-1 md:grid-cols-2 mt-6 gap-5">
                <p class="text-center text-lg font-bold">
                    <i class="fas fa-bath w-5 h-5 inline-block text-blue-500"></i>
                    Num baños: <span class="font-normal">{{ $local->amenidad->noBaños }}</span>
                </p>
                <p class="text-center text-lg font-bold">
                    <i class="fas fa-users w-5 h-5 inline-block text-blue-500"></i>
                    Capacidad max: <span class="font-normal">{{ $local->amenidad->capacidadMax }}</span>
                </p>
                <p class="text-center text-lg font-bold">
                    <i class="fas fa-cube w-5 h-5 inline-block text-blue-500"></i>
                    Num mesas: <span class="font-normal">{{ $local->amenidad->noMesas }}</span>
                </p>
                <p class="text-center text-lg font-bold">
                    <i class="fas fa-chair w-5 h-5 inline-block text-blue-500"></i>
                    Num sillas: <span class="font-normal">{{ $local->amenidad->noSillas }}</span>
                </p>
                <p class="text-center text-lg font-bold">
                    <i class="fas fa-parking w-5 h-5 inline-block text-blue-500"></i>
                    Num parqueos: <span class="font-normal">{{ $local->amenidad->noParques }}</span>
                </p>
                <p class="text-center text-lg font-bold">
                    <i class="fas fa-star w-5 h-5 inline-block text-yellow-500"></i>
                    Otras amenidades: <span class="font-normal">{{ $local->amenidad->otrasAmen }}</span>
                </p>

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
    <div class="text-center ">
        <button class="w-1/2 border rounded-md bg-principal text-white font-bold text-lg p-3 mb-5 ">Reservar</button>
    </div>

</x-app-layout>