@extends('layouts.app')

@section('content')
<div class="w-4/5 m-auto text-center">
    <div class="py-16 border-b border-gray-200">
        <h1 class="text-6xl">
            Blog Posts
        </h1>
    </div>
</div>

@foreach ($posts as $post)
    <div class="sm:grid grid-cols-2 gap-20 w-4/5 mx-auto py-16 border-b border-gray-200">
        <div>
            <img src="https://cdn.pixabay.com/photo/2014/07/06/13/55/calculator-385506_1280.jpg" alt="">
        </div>
        <div>
            <h2 class="text-gray-700 font-bold pb-4 text-5xl">
                {{ $post->title }}
            </h2>

            <span class="text-gray-500">
                By <span class="font-bold italic text-gray-800">Code with Andrey</span>
            </span>, 1 day ago

            <p class="text-xl text-gray-700 pt-8 pb-10 leading-8 font-light">
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ipsum exercitationem fugiat quas fugit fuga culpa debitis sunt quae, pariatur quia porro, illo molestiae numquam voluptas impedit possimus corporis eius, asperiores eligendi unde voluptate. Dolore a unde iste inventore facere vero voluptatum ipsum molestias nemo. Fuga voluptates omnis ab recusandae totam?
            </p>

            <a href="" class="uppercase bg-blue-500 text-gray-100 text-lg font-extrabold py-4 px-8 rounded-3xl">
                Keep Reading
            </a>
        </div>
    </div>
@endforeach

@endsection