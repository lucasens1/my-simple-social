@extends('layouts.social')

@section('content')
    {{-- <div x-data="{ posts: @json($posts) }" x-effect="console.log(posts)">
        <template x-if="posts.length === 0">
            Ooops nessun post
        </template>

        <template x-for="post in posts" :key="post.id">
            <div class="shadow-xl border-2 border-orange-800 p-2">
                <h2 x-text="post.content"></h2>
            </div>
        </template>
    </div> --}}
    @if ($posts->isEmpty())
        <p> Oops è così vuoto. </p>
    @else
        @foreach ($posts as $post)
            <div class="shadow-xl border-2 border-orange-800 p-2 max-w-80">
                <h2>{{ $post->content }}</h2>
                <small>@ {{ $post->user->name }}</small>
            </div>
        @endforeach
    @endif
@endsection
