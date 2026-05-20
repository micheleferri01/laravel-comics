
 @extends('layouts/master')

 @section('main-section')

 @php
    $comics = config('comics');
 @endphp
    <main>
        <div class='ow-hidden jumbo'>
            <img src="{{Vite::asset('resources/img/jumbotron.jpg')}}" alt="jumbotron" />
        </div>
        <div class="bg-comics text-white pt-5 pb-3 position-relative">
            <div class='container position-relative'>
                <h1 class='bg-blue fs-3 fw-bold px-3 py-1 my-badge'>CURRENT SERIES</h1>
                <div class='row g-3'>
                    @foreach($comics as $comic)
                        <x-card>
                            <x-slot:thumb>{{$comic['thumb']}}</x-slot>
                            <x-slot:title>{{$comic['title']}}</x-slot>
                            <x-slot:series>{{$comic['series']}}</x-slot>
                        </x-card>
                    @endforeach
                </div>
                <button class='bg-blue text-white py-2 px-5 btn-load-more'>LOAD MORE</button>
            </div>
        </div>

    </main>
 @endsection
