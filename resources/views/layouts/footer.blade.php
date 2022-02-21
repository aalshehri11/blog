<footer class="bg-zinc-900 py-20 mt-20">
    <div class=" sm:grid grid-cols-3 w-4/5 pb-10 m-auto border-b-2 border-cyan-900">
        <div>
            <h3 class="text-lg sm:font-bold text-gray-100">
                Pages
            </h3>

            <ul class="py-4 sm:text-sm pt-4 text-gray-400">
                <li class="pb-1">
                    <a href="/">
                        Home
                    </a>
                </li>
                <li class="pb-1">
                    <a href="/blog">
                        Blog
                    </a>
                </li>
                <li class="pb-1">
                    <a href="/login">
                        Login
                    </a>
                </li>
                <li class="pb-1">
                    <a href="/register">
                        Register
                    </a>
                </li>
            </ul>
        </div>

        <div>
            <h3 class="text-lg sm:font-bold text-gray-100">
                Latest posts
            </h3>

            <ul class="py-4 sm:text-sm pt-4 text-gray-400">
                @foreach ($latestPosts as $latest)
                <li class="pb-1">
                    <a href="/blog/{{ $latest->slug }}">
                        {{ $latest->title }}
                    </a>
                </li> 
                @endforeach
            </ul>
        </div>
    </div>
    <p class="w-25 w-4/5 pb-3 text-center m-auto text-xs text-gray-100 pt-6">
        Copyright 2022 <a href="https://andreywebdays.com/" target="_blank" rel="noopener noreferrer">Andrey WebDays</a>. All Rights Reserved
    </p>
</footer>