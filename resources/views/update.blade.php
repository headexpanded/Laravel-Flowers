@extends('template')
@section('title')
    Update {{ $flower->name }}
@endsection
@section('content')
    @if (session('message'))
        <div class="alert alert-fail">{{ session('message') }}</div>
    @endif

    <div class="_divNewFlowerForm">

        <form class="_FlowerForm" method="post">
            @csrf
            <label for="name">Change Flower Name</label>
            <input type="text" name="name" value="{{ $flower->name }} "placeholder="{{ $flower->name }}">
            <label for="price">Change Flower Price</label>
            <input type="text" name="price" value="{{ $flower->price }}"placeholder={{ $flower->price }}>
            <input class="_formInputSubmit" type="submit" value="Update">
        </form>
        @if ($errors->any())
            <div class="_divFlowerEditUpdate">
                <div class="alert alert-danger">
                    <ul class="_ulFlowerEditUpdate">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
        @endif
    </div>
@endsection
