@extends('template')
@section('title')
    Flowers
@endsection
@section('content')
    <div style="text-align:center;">
        <h2>Flowers List</h2>
        <hr>
    </div>

    @if (session('message'))
        <div class="alert alert-success">{!! session('message') !!}</div>
    @endif

    <div class="displayAll">
        @if (empty($flowers))
            return <p>No flowers in db.</p>
        @else
            @foreach ($flowers as $flower)
                <dl>

                    <div class="Card">

                        <dt class="dt">
                            <p>Name: {{ $flower->name }}</p>
                        </dt>
                        <dd class="dd">
                            <p>Price: {{ $flower->price }}</p>
                            <p>Available Since: {{ $flower->created_at }}</p>
                            <p><a href="/flowers/{{ $flower->id }}">Details</a></p>
                        </dd>



                    </div>
                </dl>
            @endforeach
    </div>
    @endif
    <div class="_paginate">{{ $flowers->links() }}</div>
@endsection
