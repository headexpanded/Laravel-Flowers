@extends('template')
@section('title')
    Flowers
@endsection
@section('content')
    <div style="text-align:center;">
        <h2>Flowers List</h2>
        <hr>
    </div>

    @if (session('message'))
        <div class="alert alert-success">{!! session('message') !!}</div>
    @endif

    <div class="displayAllFlowers">
        @if (empty($flowers))
            return <p>No flowers in db.</p>
        @else
            @foreach ($flowers as $flower)
                <div class="flowerCard">
                    <p>Name: {{ $flower->name }}</p>
                    <p>Price: $ {{ $flower->price }}</p>
                    <p><a href="/flowers/{{ $flower->id }}">Details</a></p>
                    <div>
                        <hr>
                    </div>
                </div>
            @endforeach
    </div>
    @endif
@endsection
