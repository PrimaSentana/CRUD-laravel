@extends('layouts.master')
@section('content')
    <header>
        <div class="h-96 flex flex-col items-center justify-center">
            <div class="flex flex-col items-center">
                <p class="text-6xl font-medium my-1">Web Project</p>
                <p class="text-3xl my-1">Here you can say something you like. Unpopular opinion or like</p>
                <p class="text-4xl font-medium my-1 bg-gradient-to-r from-stone-100 via-slate-100 to-slate-400 bg-clip-text text-transparent">your random thought.</p>
            </div>
        </div>
    </header>

    {{-- posts --}}
    <div class="flex flex-col items-center">
        <div class="grid grid-cols-4 gap-4 w-3/4">
            @foreach ($posts as $post)
            <form action="/post/{{ $post->id }}/delete" method="POST" class="grid">
                @csrf
                @method('DELETE')
                <div class="flex flex-col max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                    <div>
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{ $post -> judul }}</h5>
                    </div>
                    <div>
                        <p class="font-normal text-gray-700 dark:text-gray-400">{{ $post -> deskripsi }}</p>
                    </div>
                    <div class="flex mt-auto gap-4">
                        <div class="mt-auto pt-2">
                            <button type="submit">Delete</button>
                        </div>
                        <div class="mt-auto pt-2">
                            <a href="/post/{{ $post -> id }}/edit">Edit</a>
                        </div>
                    </div>
                </div>
            </form>
            @endforeach
        </div>
    </div>
@endsection