<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Lista de Usuarios') }}
        </h2>
    </x-slot>

    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="overflow-x-auto">
                        <table class="w-full bg-white border border-gray-200">
                            <thead class="text-white" style="background-color: coral;">
                                <tr>
                                    <th class="py-3 px-6 text-left">{{ __('Nombre') }}</th>
                                    <th class="py-3 px-6 text-left">{{ __('Apellido') }}</th>
                                    <th class="py-3 px-6 text-left">{{ __('Email') }}</th>
                                    <th class="py-3 px-6 text-left">{{ __('Teléfono') }}</th>
                                    <th class="py-3 px-6 text-left">{{ __('Rol') }}</th>
                                </tr>
                            </thead>
                            <tbody class="text-gray-700">
                                @forelse ($users as $user)
                                <tr class="border-b hover:bg-gray-100">
                                    <td class="py-3 px-6">{{ $user->name }}</td>
                                    <td class="py-3 px-6">{{ $user->surname }}</td>
                                    <td class="py-3 px-6">{{ $user->email }}</td>
                                    <td class="py-3 px-6">{{ $user->phone_number ?? 'No disponible' }}</td>
                                    <td class="py-3 px-6">
                                        <span class="px-3 py-1 rounded-full text-sm font-semibold 
                                                {{ $user->role === 'admin' ? 'bg-red-500' : 'bg-blue-500' }}">
                                            {{ ucfirst($user->role) }}
                                        </span>
                                    </td>
                                </tr>
                                @empty
                                <tr>
                                    <td colspan="5" class="text-center py-4 text-gray-500">
                                        {{ __('No hay usuarios registrados.') }}
                                    </td>
                                </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>