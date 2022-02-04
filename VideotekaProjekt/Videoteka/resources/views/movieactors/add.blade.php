<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dodavanje glumca u film') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-2">
                    <form method="POST" action="{{route('store_movieactors')}}">
                        @csrf
                        <div>
                            <x-jet-label for="idmovie" value="{{ __('Naziv filma') }}" />
                            <select id="idmovie" name="idmovie">
                            @foreach($movies as $movie) 
                                <option value="{{$movie->id}}">{{$movie->name}}</option>
                            @endforeach 
                            </select>
                        </div>
                        <div>
                            <x-jet-label for="idactor" value="{{ __('Glumac') }}" />
                            <select id="idactor" name="idactor">
                            @foreach($actors as $actor) 
                                <option value="{{$actor->id}}">{{$actor->name}} {{$actor->lastname}}</option>
                            @endforeach 
                            </select>
                        </div>
                        <div>
                            <x-jet-label for="role" value="{{ __('Uloga') }}" />
                            <x-jet-input id="role" class="block mt-1 w-full" type="text" name="role" required autofocus />
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
