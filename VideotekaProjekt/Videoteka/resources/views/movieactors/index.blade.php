<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Glumci u filmovima') }}
        </h2>
    </x-slot>
    <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
        <x-jet-nav-link href="{{ route('add_movieactors') }}">
            {{ __('Dodaj glumca u film') }}
        </x-jet-nav-link>
    </div>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-2">
                   
                    @foreach ($movieactors as $movieactor)
                    <hr>
                    <div class="p-2">
                        @foreach ($movies as $movie)
                            @if($movieactor->idmovie==$movie->id)
                            <p class="p-2"><b>{{$movie->name}}</b></p>
                            @endif
                        @endforeach
                    </div>
                    <div class="p-2">
                        @foreach ($actors as $actor)
                            @if($movieactor->idactor==$actor->id)
                            <span><b>{{$actor->name}} {{$actor->lastname}}</b> as {{$movieactor->role}}</span>
                            @endif
                        @endforeach
                    </div>
                    <hr>
                    @endforeach
                </div>
            </div>
        </div>
    </div>


</x-app-layout>
