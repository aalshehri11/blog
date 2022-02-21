@extends('layouts.app')

@section('content')
    <div class="background-image grid grid-cols-1 m-auto">
        <div class="flex text-gray-100 pt-10">
            <div class="m-auto pt-4 pb-16 sm:m-auto w-4/5 block text-center">
                <h1 class="sm:text-white text-5xl uppercase font-bold drop-shadow-md pb-14">
                    Laravel 9 + Tailwind CSS Blog
                </h1>
                <a 
                    href="/blog"
                    class="text-center bg-gray-50 text-gray-700 py-2 px-4 font-bold text-xl uppercase">
                    Read More
                </a>
            </div>
        </div>
    </div>

    <div class=" sm:grid grid-cols-2 gap-20 w-4/5 mx-auto py-16 border-b border-gray-200">
        <div>
            <img src="images/laptop-g864633093_1920.jpg" width="700" alt="">
        </div>

        <div class="m-auto sm:m-auto text-left w-4/5 block">
            <h2 class="text-3xl font-extrabold text-gray-600">
                Looking at Andrey's Web Development portfolio?
            </h2>
            
            <p class="pt-8 pb-12 text-gray-500 text-md">
                You found it! This project shows a great combo of Laravel 9 and TailwindCSS. I've created a nice blog platform with authentication capabilities. 
            </p>

            <a 
                href="/blog"
                class="uppercase bg-cyan-600 text-gray-100 text-sm font-extrabold py-3 px-8 rounded-3xl">
                Find Out More
            </a>
        </div>
    </div>

    <div class="text-center p-16 bg-yellow-900 text-white">
        <h2 class="text-2xl pb-5"> 
            Tech stack for this project:
        </h2>

        <span class="font-extrabold block text-4xl py-1">
            HTML, CSS, JS, & PHP
        </span>
        <span class="font-extrabold block text-4xl py-1">
            Laravel
        </span>
        <span class="font-extrabold block text-4xl py-1">
            MySQL
        </span>
        <span class="font-extrabold block text-4xl py-1">
            TailwindCSS
        </span>
    </div>

    <div class="text-center py-10">
        <h2 class="text-4xl font-bold py-10 text-gray-600">
            Recent Post
        </h2>
    </div>

    <div class="container sm:grid grid-cols-2 w-4/5 m-auto overflow-hidden">
        <div class="flex bg-cyan-600 text-gray-100 pt-10">
            <div class="m-auto pt-4 pb-16 sm:m-auto w-4/5 block">
                
                <span class="uppercase text-xs">
                    {{ $latestPost->title }}
                </span>

                <h3 class="text-xl font-bold py-10">
                    {{ $latestPost->description }}
                </h3>

                <a 
                    href="/blog/{{ $latestPost->slug }}"
                    class="uppercase bg-transparent border-2 border-gray-100 text-gray-100 text-xs font-extrabold py-3 px-5 rounded-3xl">
                    Find Out More
                </a>
            </div>
        </div>
        <div class="h-full relative" style="display: flex; justify-content: center; align-items: center; overflow: hidden">
            <img class="" style="flex-shrink: 0; min-width: 100%; min-height: 100%; object-fit: cover;" src="{{ asset('images/' . $latestPost->image_path) }}" alt="">
        </div>
    </div>

@endsection