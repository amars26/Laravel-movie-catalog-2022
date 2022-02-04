<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dodavanje žanra') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-2">
                    <form method="POST" action="{{route('store_genre')}}">
                        @csrf
                        <div>
                            <x-jet-label for="name" value="{{ __('Naziv') }}" />
                            <x-jet-input id="name" class="block mt-1 w-full" type="text" name="name" required autofocus />
                        </div>
                        <div class="flex items-center justify-end mt-4">
                            <input type="submit" value="Spremi">
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>


</x-app-layout>
