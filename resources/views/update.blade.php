@extends('template')
@section('title')
    Update {{ $flower->name }}
@endsection
@section('content')
    @if (session('message'))
        <div class="alert alert-fail">{{ session('message') }}</div>
    @endif

    <div style="width:800px; margin:0 auto; background:whitesmoke;padding: 20px 0px; ">
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
        <form style="display:flex; flex-direction: column; place-items: center; gap: 1.5rem;" method="post">
            @csrf
            <label for="name">Change Flower Name</label>
            <input type="text" name="name" value="{{ $flower->name }} "placeholder="{{ $flower->name }}">
            <label for="price">Change Flower Price</label>
            <input type="text" name="price" value="{{ $flower->price }}"placeholder={{ $flower->price }}>
            <input type="submit" value="Update">
        </form>
    </div>
@endsection
