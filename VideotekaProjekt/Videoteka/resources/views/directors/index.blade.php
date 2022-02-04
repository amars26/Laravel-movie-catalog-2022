<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Režiseri') }}
        </h2>
    </x-slot>
    <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
        <x-jet-nav-link href="{{ route('add_director') }}">
            {{ __('Dodaj režisera') }}
        </x-jet-nav-link>
    </div>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <table>
                    @foreach ($directors as $director)
                    <tr>
                        <td><img src="{{url('/images/actors/1.png')}}" width="150px"></td>
                       <td>
                            <p class="p-2"><b>{{ $director->name }} {{ $director->lastname }}</b></p>
                            <p class="p-2">Datum rođenja: {{ $director->birthdate }}</p>
                            @foreach ($countries as $country)
                                @if($director->idcountry==$country->id)
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
