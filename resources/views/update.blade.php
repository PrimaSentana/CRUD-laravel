@extends('layouts.master')
@section('content')
    <div class="flex flex-co justify-center items-center h-3/5">
        <div class="flex flex-col w-2/5 p-4 h-3/4 justify-center border-4 border-slate-500 rounded-lg">
            <form action="/post/{{ $posts -> id }}/update" method="POST">
                @csrf
                @method('PUT')
                <div class="mb-6">
                    <label for="judul" class="block mb-2 font-medium text-gray-900 dark:text-white text-xl">Judul</label>
                    <input type="text" name="judul" id="judul" value="{{ $posts -> judul }}" placeholder="Whatever you want!" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                </div>
                <div class="mb-6">
                    <label for="deskripsi" class="block mb-2 text-xl font-medium text-gray-900 dark:text-white">Deskripsi</label>
                    <input type="text" name="deskripsi" id="deskripsi" value="{{ $posts -> deskripsi }}" class="block w-full p-4 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 sm:text-md focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                </div>
                <div class="flex justify-center gap-4 my-6 ">
                    <input type="submit" value="Submit" class="border rounded-full py-2 px-6 cursor-pointer">
                </div>
            </form>
            <div class="flex justify-center">
                <a href="/"><button class="border rounded-full py-2 px-6 ">Back to Dashboard</button></a>
            </div>
        </div>
    </div>
@endsection