@extends('template')
@section('title')
    {{ $flower->name }}
@endsection
@section('content')
    <div class="_flowerDetail">
        <dl>
            <div class="flowerCard">
                <dt class="dt">
                    <p>{{ $flower->name }}</p>
                </dt>
                <dd class="dd">
                    <p>$ {{ $flower->price }}</p>
                </dd>

                <p><a href="/flowers/update/{{ $flower->id }}">Edit</a></p>
                <p><a href="/flowers/delete/{{ $flower->id }}">Delete</a></p>
                <div class="_flowerDetailNav">
                    <p><a href="/flowers"><span class="material-symbols-outlined">
                                arrow_back
                            </span>Back</a></p>
                </div>
            </div>
        </dl>
        <div class="_flowerDesc">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Blanditiis id aliquid, ducimus
            quisquam mollitia, commodi animi adipisci aspernatur quaerat repellat similique reiciendis nam ea in temporibus
            numquam optio quam minima.</div>
    </div>
@endsection
