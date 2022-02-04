<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Index') }}
        </h2>
    </x-slot>

    <table width="100%">
        <tr>
            <td width="10%"></td>
            <td width="80%" height="50px"></td>
            <td width="10%"></td>
        </tr>
        <tr>
            <td></td>
            <td style="background-color:white; color:black;">
                <center><h1><b>Dobrodošli!</b></h1></center>
                <p style="text-align: justify;" >
                    Cilj ove jednostavne aplikacije jeste prikazati rad sa relacionom bazom podataka čiji se podaci čuvaju u objektima.
                    Tema aplikacije jeste videoteka, klase pravljene
                    u aplikaciji su: Filmovi, Žanrovi, Glumci, Režiseri, Države i klasa FilmGlumac koja predstaljva M:N
                    vezu entiteta Film i Glumac. U programu prave se objekti svake klase a zatim se nad istima pozivaju odgovarajuće funkcije
                    te se na taj način prikazuje rad sa podacima u vidu objekata. Korištena tehnologija je Laravel, objektno-orijentirani PHP framework
                    za izradu web aplikacija. Korištena je SQL baza podataka, čiji su entiteti mapirani u objekte pokretanjem same Laravel aplikacije.
                    Glavni sadržaj stranice jesu SQL upiti nad prethodno spomenutim objektima, na sljedećem linku:
                    <a href="{{ route('movieactors.indexUpit') }}"><b>{{ __('Upiti') }}</b></a>
                </p>
            </td>
            <td></td>
        </tr>
    </table>

</x-app-layout>
