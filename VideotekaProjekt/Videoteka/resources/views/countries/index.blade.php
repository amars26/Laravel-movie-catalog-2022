<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Države') }}
        </h2>
    </x-slot>
    <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
        <x-jet-nav-link href="{{ route('add_country') }}">
            {{ __('Dodaj državu') }}
        </x-jet-nav-link>
    </div>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-2">
                    @foreach ($countries as $country)
                        <p class="p-2"><b>{{ $country->name }}</b></p>
                    @endforeach
                </div>
            </div>
        </div>
    </div>


</x-app-layout>
