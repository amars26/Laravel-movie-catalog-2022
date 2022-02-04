<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Glumci') }}
        </h2>
    </x-slot>
    <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
        <x-jet-nav-link href="{{ route('add_actor') }}">
            {{ __('Dodaj glumca') }}
        </x-jet-nav-link>
    </div>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <table>
                    @foreach ($actors as $actor)
                    <tr>
                        <td><img src="{{url('/images/actors/1.png')}}" width="150px"></td>
                        <td>
                            <p class="p-2"><b>{{ $actor->name }} {{ $actor->lastname }}</b></p>
                            <p class="p-2">Datum rođenja: {{ $actor->birthdate }}</p>
                            @foreach ($countries as $country)
                                @if($actor->idcountry==$country->id)
                                <p class="p-2">Država: {{$country->name}}</p>
                                @endif
                            @endforeach
                        </td>
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>


</x-app-layout>
