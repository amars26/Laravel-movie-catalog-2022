<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dodavanje glumca') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-2">
                    <form method="POST" action="{{route('store_actor')}}">
                        @csrf
                        <div>
                            <x-jet-label for="name" value="{{ __('Ime') }}" />
                            <x-jet-input id="name" class="block mt-1 w-full" type="text" name="name" required autofocus />
                        </div>
                        <div>
                            <x-jet-label for="lastname" value="{{ __('Prezime') }}" />
                            <x-jet-input id="lastname" class="block mt-1 w-full" type="text" name="lastname" required autofocus />
                        </div>
                        <div>
                            <x-jet-label for="birthdate" value="{{ __('Datum rođenja') }}" />
                            <x-jet-input id="birthdate" class="block mt-1 w-full" type="date" name="birthdate" required autofocus />
                        </div>
                            <x-jet-input id="idpicture" class="block mt-1 w-full" type="hidden" name="idpicture" value="1" />
                        <div>
                            <x-jet-label for="idcountry" value="{{ __('Država') }}" />
                            <select id="idcountry" name="idcountry">
                            @foreach($countries as $country) 
                                <option value="{{$country->id}}">{{$country->name}}</option>
                            @endforeach 
                            </select>
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
