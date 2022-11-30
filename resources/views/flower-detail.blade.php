@extends('template')
@section('title')
    {{ $flower->name }}
@endsection
@section('content')
    @if ($errors->any())
        <div style="padding:16px 0px;">
            <div class="alert alert-danger">
                <ul
                    style="display:flex; flex-flow:row; justify-content: center;list-style-type: none; text-transform: uppercase; color: red; margin:0; font-size:1.5em;">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        </div>
    @endif
    <div class="flowerCard">
        <p>{{ $flower->name }}</p>
        <p>$ {{ $flower->price }}</p>
        <p><a href="/flowers/update/{{ $flower->id }}">Edit</a></p>
        <p><a href="/flowers/delete/{{ $flower->id }}">Delete</a></p>
        <p><a href="/flowers">Back</a></p>
    </div>
@endsection
