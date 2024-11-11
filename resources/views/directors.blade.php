<x-layout>
    <x-slot name='title'>Directors</x-slot>

    @foreach ($directors as $director)
        <a href="/directors/{{$director}}" class="btn btn-primary m-2 p-2">{{$director}}</a>
    @endforeach
</x-layout>
