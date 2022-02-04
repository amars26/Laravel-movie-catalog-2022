<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Filmovi') }}
        </h2>
    </x-slot>
    <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
        <x-jet-nav-link href="{{ route('add_movie') }}">
            {{ __('Dodaj film') }}
        </x-jet-nav-link>
    </div>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <table width="100%">
                    @foreach ($movies as $movie)
                    <tr>
                        <td><img src="{{url('/images/movies/1.png')}}" width="210px"></td>
                        <td width="80%">
                            <hr width="100%">
                            <p class="p-2"><b>{{ $movie->name }}</b></p>
                            <p class="p-2">Datum izlazska: {{ $movie->releasedate }}</p>
                            @foreach ($countries as $country)
                                @if($movie->idcountry==$country->id)
                                <p class="p-2">Snimano u: {{$country->name}}</p>
                                @endif
                            @endforeach
                            @foreach ($directors as $director)
                                @if($movie->iddirector==$director->id)
                                <p class="p-2">Režiser: {{$director->name}} {{$director->lastname}}</p>
                                @endif
                            @endforeach
                            @foreach ($genres as $genre)
                                @if($movie->idgenre==$genre->id)
                                <p class="p-2">Žanr: {{$genre->name}}</p>
                                @endif
                            @endforeach
                            <form method="POST" action="{{ route('edit_movie') }}">
                                @csrf
                                <input type="hidden" name="id" value="{{$movie->id}}">
                                <button type="submit" style="color:black; background-color:#95f283; padding:5px 10px; border-radius:10%;">Edit</button>
                            </form>
                            <form method="POST" action="{{ route('delete_movie') }}">
                                @csrf
                                <input type="hidden" name="id" value="{{$movie->id}}">
                                <button type="submit" style="color:black; background-color:#95f283; padding:5px 10px; border-radius:10%; margin-top:5px;" >Delete</button>
                            </form>
                            <br>
                            <hr>
                        </td>
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>


</x-app-layout>
