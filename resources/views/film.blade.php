<x-layout>
    <x-slot name='title'>{{$film['Cim_en']}}</x-slot>


    <div class="d-flex justify-content-between">
        <div class="details">
            <p>Hungarian title: {{$film["Cim_hu"]}}</p>
            <p>Premier date: {{$film["Bemutato"]}}</p>
            <p>Length: {{$film["Hossz"]}}</p>
            <p>Director(s): {{$film["Rendezo"]}}</p>
            <p>Actors: {{$film["Szineszek"]}}</p>
            <p>IMDB rating: {{$film["Imdb"]}}</p>
            <p>Number of votes: {{$film["Szavazok"]}}</p>
            <p>Income: {{$film["Bevetel"]}}</p>
        </div>

        <img src="{{$film["Poszter"]}}" alt="">
    </div>

</x-layout>
