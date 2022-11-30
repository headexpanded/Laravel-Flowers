@extends('template')
@section('title')
    Add A Flower
@endsection
@section('content')
    @if (session('message'))
        <div class="alert alert-fail">{{ session('message') }}</div>
    @endif
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

    <div class="_divNewFlowerForm">

        <form class="_FlowerForm" method="post">
            @csrf
            <label for="name">Flower Name</label>
            <input type="text" name="name">
            <label for="price">Flower Price</label>
            <input type="text" name="price">
            <input class="_formInputSubmit" type="submit" value="Insert">
        </form>
    </div>
@endsection
