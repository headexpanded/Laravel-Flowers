@extends('template')
@section('title')
    Login
@endsection
@section('content')
    <div style="text-align:center;">
        <h2>Login Here</h2>
        <hr>
    </div>
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
            
            <label for="email">Email: </label>
            <input type="email" name="email">
            <label for="password">Password: </label>
            <input type="password" name="password">
            <input class="_formInputSubmit" type="submit" value="Register">
        </form>
    </div>
@endsection
