@extends('template')
@section('title')
    Add A Flower
@endsection
@section('content')
    @if (session('message'))
        <div class="alert alert-fail">{{ session('message') }}</div>
    @endif

    <div style="width:800px; margin:0 auto; background:whitesmoke;padding: 20px 0px; ">

        <form style="display:flex; flex-direction: column; place-items: center; gap: 1.5rem;" method="post">
            @csrf
            <label for="name">Flower Name</label>
            <input type="text" name="name">
            <label for="price">Flower Price</label>
            <input type="text" name="price">
            <input type="submit" value="Insert">
        </form>
    </div>
@endsection
