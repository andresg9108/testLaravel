<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight flex items-center justify-between">
            {{ __('Entradas') }}

            <a href="{{ route('misentradas.create') }}" class="text-xs bg-gray-800 text-white rounded px-2 py-1">Crear</a>
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("Listado de publicaciones") }}

                    <table class="mb-4">
                        @foreach ($entradas as $entrada)
                        <tr class="border-b border-gray-200 text-sm">
                            <td class="px-6 py-4">{{ $entrada->title }}</td>
                            <td class="px-6 py-4">
                                <a href="{{ route('misentradas.edit', $entrada) }}" class="text-indigo-600">Editar</a>
                            </td>
                            <td class="px-6 py-4">
                                <form action="{{ route('misentradas.destroy', $entrada) }}" method="POST">
                                    @csrf
                                    @method('DELETE')

                                    <input 
                                        type="submit" 
                                        value="Eliminar" 
                                        class="bg-gray-800 text-white rounded px-4 py-2" 
                                        onclick="return confirm('¿Eliminar?')"
                                    />
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </table>
                    {{ $entradas->links() }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>