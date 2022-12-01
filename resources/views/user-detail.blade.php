@extends('template')
@section('title')
    {{ $user->name }}
@endsection
@section('content')
    <div class="_flowerDetail">
        <dl>
            <div class="Card">
                <dt class="dt">
                    <p>Name: {{ $user->name }}</p>
                </dt>
                <dd class="dd">
                    <p>Email: {{ $user->email }}</p>
                </dd>


                <div class="_detailNavLinks">
                    <p><a href="/users">Back</a></p>
                    <p><a href="/users/update/{{ $user->id }}">Edit</a></p>
                    <p><a href="/users/delete/{{ $user->id }}">Delete</a></p>
                </div>

            </div>
        </dl>
        <div class="_flowerDesc">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Blanditiis id aliquid, ducimus
            quisquam mollitia, commodi animi adipisci aspernatur quaerat repellat similique reiciendis nam ea in temporibus
            numquam optio quam minima.</div>
    </div>
@endsection
