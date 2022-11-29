@extends('template')
@section('title')
    Update {{ $flower->name }}
@endsection
@section('content')
    @if (session('message'))
        <div class="alert alert-fail">{{ session('message') }}</div>
    @endif

    <div style="width:800px; margin:0 auto; background:whitesmoke;padding: 20px 0px; ">

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
