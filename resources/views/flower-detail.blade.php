@extends('template')
@section('title')
    {{ $flower->name }}
@endsection
@section('content')
    <div class="flowerCard">
        <p>{{ $flower->name }}</p>
        <p>$ {{ $flower->price }}</p>
        <p><a href="/flowers/update/{{ $flower->id }}">Edit</a></p>
        <p><a href="/flowers/delete/{{ $flower->id }}">Delete</a></p>
        <p><a href="/flowers">Back</a></p>
    </div>
@endsection
