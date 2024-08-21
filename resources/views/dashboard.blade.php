<x-app-layout>
    <h1 class="text-2xl font-bold text-center py-4">Mis Reservaciones</h1>

    @if(session('success'))
        <div class="bg-green-500 text-white font-bold text-center py-2 px-4 rounded-md my-4">
            {{ session('success') }}
        </div>
    @endif

    @if(session('error'))
        <div class="bg-red-500 text-white font-bold text-center py-2 px-4 rounded-md my-4">
            {{ session('error') }}
        </div>
    @endif

    <div class="container mx-auto">
        @forelse($reservas as $reserva)
            <div class="bg-white shadow-md rounded-lg p-4 my-2 dark:bg-secondary-dark">
                <h2 class="text-xl font-bold">{{ $reserva->local->nombre }}</h2>
                <p><strong>Fecha de Inicio:</strong> {{ $reserva->fechaInicio }}</p>
                <p><strong>Fecha de Fin:</strong> {{ $reserva->fechaFin }}</p>
                <p><strong>Total:</strong> ${{ $reserva->total }}</p>

                @php
                    $fechaActual = now();
                    $fechaLimiteCancelacion = \Carbon\Carbon::parse($reserva->fechaInicio)->subDays(2);
                @endphp

                @if($fechaActual->lessThan($fechaLimiteCancelacion) && !$reserva->cancelada)
                    <form action="{{ route('reserva.cancelar', $reserva->idReserva) }}" method="POST" class="mt-4">
                        @csrf
                        @method('PUT')
                        <button type="submit" class="bg-red-600 text-white px-4 py-2 rounded-md">
                            Cancelar Reserva
                        </button>
                    </form>
                @else
                    <p class="text-red-500 mt-4">
                        La reserva no se puede cancelar
                        @if($reserva->cancelada) porque ya está cancelada. @else porque está dentro del periodo de no cancelación.@endif
                    </p>
                @endif
            </div>
        @empty
            <p class="text-center text-lg">No tienes reservaciones activas.</p>
        @endforelse
    </div>
</x-app-layout>
