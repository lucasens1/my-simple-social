@extends('layouts.social')

@section('content')
    @if ($posts->isEmpty())
        <p> Oops è così vuoto. </p>
    @else
        @foreach ($posts as $post)
            <div>
                <h2>{{ $posts->content }}</h2>
            </div>
        @endforeach
    @endif
@endsection
