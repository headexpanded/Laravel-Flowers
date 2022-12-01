@extends('template')
@section('title')
    Users
@endsection
@section('content')
    <div class="_pageHeader">
        <h2>User List</h2>
        <h4>JSON</h4>
        <hr>
    </div>

    @if (session('message'))
        <div class="alert alert-success">{!! session('message') !!}</div>
    @endif

    <div class="displayAll">
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
        @endif
    </div>
    <div class="_paginate">{{ $users->links() }}</div>
@endsection
