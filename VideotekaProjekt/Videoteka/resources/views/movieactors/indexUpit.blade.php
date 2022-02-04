<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Primjeri upita na objektno relacionim bazama') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-2">
                    <h1 class="font-xl">Top 5 glumaca po broju filmova</h1>
                    @foreach ($upit1 as $upit)
                    <div class="p-2">

                        <p>{{$loop->iteration}}. {{$upit->name}} {{$upit->lastname}} - {{$upit->brojac}}</p>
                        
                    </div>
                    <hr>
                    @endforeach
                </div>
            </div>
        </div>
    </div>


    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-2">
                    <h1 class="font-xl">Top 3 države po ukupnom broju filmova u kojima su glumili svi njihovi glumci</h1>
                    @foreach ($upit2 as $upit)
                    <div class="p-2">

                        <p>{{$loop->iteration}}. {{$upit->name}} - {{$upit->brojac}}</p>
                        
                    </div>
                    <hr>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-2">
                    <h1 class="font-xl">Top 3 države po ukupnom broju akcionih filmova u kojima su glumili svi njihovi glumci</h1>
                    @foreach ($upit3 as $upit)
                    <div class="p-2">

                        <p>{{$loop->iteration}}. {{$upit->name}} - {{$upit->brojac}}</p>
                        
                    </div>
                    <hr>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-2">
                    <h1 class="font-xl">Akcioni filmovi u kojima je glumio Jason Statham u periodu od 1999. - 2009. godine</h1>
                    @foreach ($upit4 as $upit)
                    <div class="p-2">

                        <p>{{$loop->iteration}}. <b>{{$upit->name}}</b></p>
                        <p>Žanr: {{$upit->genrename}}</p>
                        <p>Datum izlaska: {{$upit->releasedate}}</p>
                    </div>
                    <hr>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-2">
                    <h1 class="font-xl">Akcioni filmovi u kojima je glumio Chris Hemsworth a režisirao Sam Hargrave u periodu od 1999. - 2009. godine</h1>
                    @foreach ($upit5 as $upit)
                    <div class="p-2">

                        <p>{{$loop->iteration}}. <b>{{$upit->name}}</b></p>
                        <p>Datum izlaska: {{$upit->releasedate}}</p>
                    </div>
                    <hr>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-2">
                    <h1 class="font-xl">Drama filmovi u kojima je glumio Jun'ichi Okada a režisirao bilo koji japanski režiser u periodu od 1999. - 2009. godine</h1>
                    @foreach ($upit6 as $upit)
                    <div class="p-2">

                        <p>{{$loop->iteration}}. <b>{{$upit->name}}</b></p>
                        <p>Datum izlaska: {{$upit->releasedate}}</p>
                    </div>
                    <hr>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-2">
                    <h1 class="font-xl">Ispisati sve glumce koji se pojavljuju u svim filmovima režisera iz Amerike ili Danske (bez dupliranja, grupirati po ID glumca)</h1>
                    @foreach ($upit7 as $upit)
                    <div class="p-2">

                        <p>{{$loop->iteration}}. <b>{{$upit->name}} {{$upit->lastname}}</b></p>
                        <p>{{$upit->moviename}} - <i>{{$upit->directorname}} {{$upit->directorlastname}}</i> - {{$upit->countryname}}</p>
                    </div>
                    <hr>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-2">
                    <h1 class="font-xl">Isto kao prethodni upit, samo sa dupliranjem, odnosno prikazuje svaki film u kojem se pojavi neki glumac iako se već pojavio prethodno u drugom filmu</h1>
                    @foreach ($upit8 as $upit)
                    <div class="p-2">

                        <p>{{$loop->iteration}}. <b>{{$upit->name}} {{$upit->lastname}}</b></p>
                        <p>{{$upit->moviename}} - <i>{{$upit->directorname}} {{$upit->directorlastname}}</i> - {{$upit->countryname}}</p>
                    </div>
                    <hr>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
