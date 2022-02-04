<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dodavanje filmova') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-2">
                    <form method="POST" action="{{route('store_movie')}}">
                        @csrf
                        <div>
                            <x-jet-label for="name" value="{{ __('Ime') }}" />
                            <x-jet-input id="name" class="block mt-1 w-full" type="text" name="name" required autofocus />
                        </div>
                        <div>
                            <x-jet-label for="releasedate" value="{{ __('Datum izlaska') }}" />
                            <x-jet-input id="releasedate" class="block mt-1 w-full" type="date" name="releasedate" required autofocus />
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
                        <div>
                            <x-jet-label for="iddirector" value="{{ __('Režiser') }}" />
                            <select id="iddirector" name="iddirector">
                            @foreach($directors as $director) 
                                <option value="{{$director->id}}">{{$director->name}} {{$director->lastname}}</option>
                            @endforeach 
                            </select>
                        </div>
                        <div>
                            <x-jet-label for="idgenre" value="{{ __('Žanr') }}" />
                            <select id="idgenre" name="idgenre">
                            @foreach($genres as $genre) 
                                <option value="{{$genre->id}}">{{$genre->name}}</option>
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
