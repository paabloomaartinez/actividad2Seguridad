<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
    </div>

    @if(Auth::user() && Auth::user()->role === 'admin')
    <div class="mt-4 flex justify-center">
        <a href="{{ route('users.list') }}" class="px-4 py-2 bg-blue-500 rounded hover:bg-blue-600 transition">
            Ver Usuarios
        </a>
    </div>
    @endif
</x-app-layout>