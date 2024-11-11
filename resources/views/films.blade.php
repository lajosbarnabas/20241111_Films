<x-layout>

    <x-slot name='title'>Films</x-slot>

    <form method="POST" action="/films/search-by-title" class="d-flex align-items-center">
        @csrf
        <label for="title" class="form-label">Title:</label>
        <input type="text" class="form-control mx-2" id="title" name="title" value="{{ old('title') ?? '' }}">
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

    <div class="row">
        @foreach ($films as $film)
            <div class="col-md-3 my-3">
                <div class="card">
                    <img src="{{ $film['Poszter'] }}" class="card-img-top" alt="{{ $film['Cim_en'] }}">
                    <div class="card-body">
                        <h5 class="card-title">{{ $film['Cim_en'] }}</h5>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">Director: {{ $film['Rendezo'] }}</li>
                            <li class="list-group-item">IMDB rating: {{ $film['Imdb'] }}</li>
                            <li class="list-group-item">Length: {{ $film['Hossz'] }}</li>
                        </ul>
                        <a href="/films/{{ $film['id'] }}" class="btn btn-primary">Details</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</x-layout>
