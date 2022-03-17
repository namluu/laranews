<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Laranews</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
    </head>
    <body class="font-sans bg-gray-background text-gray-900 text-sm">

        <header class="flex items-center justify-between px-6 py-4">
            <a href=""><img src="{{ asset('img/logo.svg') }}" alt="logo"></a>
            <div class="flex items-center">
                @if (Route::has('login'))
                    <div class="px-6 py-4">
                        @auth
                            <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <a href="{{ route('logout') }}"
                                                 onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                    {{ __('Log Out') }}
                                </a>
                            </form>
                        @else
                            <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                            @endif
                        @endauth
                    </div>
                @endif
                <a href="">
                    <img src="https://www.gravatar.com/avatar/0000000000000000000000000000000?d=mp" alt="" class="w-8 h-8 rounded-full">
                </a>
            </div>
        </header>

        <main class="container mx-auto max-w-custom flex">
            <div class="w-70 mr-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab autem, consectetur ea, ex hic illo quaerat, quibusdam sint tenetur vero voluptate voluptatibus. Animi at atque earum eius esse eum fugit magni perferendis praesentium, quae quam quas ratione reprehenderit repudiandae sed totam vel voluptatem voluptates. Accusantium asperiores consequuntur dignissimos dolor dolores eligendi eum facere, ipsum itaque, maiores molestiae neque odio perspiciatis quae rem soluta tempore vel voluptate? Ab, ad delectus eos eum explicabo laboriosam laborum obcaecati, pariatur, porro quibusdam repellendus sequi veritatis vero? Alias asperiores consectetur, cumque dignissimos eos et exercitationem expedita fugit, ipsam itaque iusto molestiae natus praesentium suscipit, ut.</div>
            <div class="w-175">
                <nav class="flex items-center justify-between text-xs">
                    <ul class="flex uppercase font-semibold border-b-4 pb-3 space-x-10">
                        <li><a href="" class="border-b-4 pb-3 border-blue">All Ideas (87)</a></li>
                        <li><a href="" class="border-b-4 pb-3 text-gray-400 transition duration-150 ease-in hover:border-blue">Considering (6)</a></li>
                        <li><a href="" class="border-b-4 pb-3 text-gray-400 transition duration-150 ease-in hover:border-blue">In progress (6)</a></li>
                    </ul>
                    <ul class="flex uppercase font-semibold border-b-4 pb-3 space-x-10">
                        <li><a href="" class="border-b-4 pb-3 text-gray-400 transition duration-150 ease-in hover:border-blue">Considering (6)</a></li>
                        <li><a href="" class="border-b-4 pb-3 text-gray-400 transition duration-150 ease-in hover:border-blue">In progress (6)</a></li>
                    </ul>
                </nav>

                <div class="mt-8">
                    {{ $slot }}
                </div>
            </div>
        </main>
    </body>
</html>
