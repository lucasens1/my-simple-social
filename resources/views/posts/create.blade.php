@extends('layouts.social')

@section('content')
    <div class="p-6 mx-auto w-1/2 max-w-64 flex flex-col justify-center border-2 border-red-700 shadow-2xl ">
        <h1>Crea un nuovo Post</h1>
        <form action="{{ route('posts.store') }}" method="POST">
            @csrf

            <div class="mb-3">
                <label for="content" class="form-label">Contenuto</label>
                <textarea class="form-control" id="content" name="content" rows="7" required></textarea>
            </div>

            <button type="submit"
                class="bg-red-950 hover:bg-red-600 transition-all font-bold py-2 px-4 border-red-900 hover:border-red-400 border-b-4 rounded-md text-white">Salva
                Post</button>
        </form>
    </div>
@endsection
