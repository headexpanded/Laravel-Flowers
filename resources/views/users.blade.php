@extends('template')
@section('title')
    Users
@endsection
@section('content')
    <div style="text-align:center;">
        <h2>User List</h2>
        <hr>
    </div>

    @if (session('message'))
        <div class="alert alert-success">{!! session('message') !!}</div>
    @endif

    <div class="displayAllFlowers">
        @if (empty($users))
            return <p>No users in db.</p>
        @else
            @foreach ($users as $user)
                <dl>

                    <div class="Card">

                        <dt class="dt">
                            <p>Name: {{ $user->name }}</p>
                        </dt>
                        <dd class="dd">
                            <p>Email: {{ $user->email }}</p>
                            <p>Member Since: {{ $user->created_at }}</p>
                            <p><a href="/users/{{ $user->id }}">User Details</a></p>
                        </dd>



                    </div>
                </dl>
            @endforeach
    </div>
    @endif
@endsection
