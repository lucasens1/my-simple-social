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
    <section class="w-full flex justify-center ">
        @if ($posts->isEmpty())
            <p> Oops è così vuoto. </p>
        @else
            <div class="w-3/4 flex flex-col gap-8 ">
                @foreach ($posts as $post)
                    <div class="shadow-xl border-2 border-orange-800 p-2 min-w-full">
                        <h2>{{ $post->content }}</h2>
                        <small>@ {{ $post->user->name }}</small>
                        @livewire('like-btn', ['post' => $post])
                    </div>
                @endforeach
        @endif
        </div>
    </section>
@endsection
