<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Optera</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Hanken+Grotesk:wght@400;500&display=swap"
        rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-[#060606] text-white font-hanken-grotesk">

<div class="px-10">

    <nav class="flex justify-between items-center py-4 border-b border-white/15">
        <div>
            <a href="/">
                <img src="{{ Vite::asset('resources/images/optera_logo_2.svg') }}" width="150" height="200" alt="">
            </a>
        </div>

        <div class="space-x-9 font-bold">
            <a href="/">Jobs</a>
            <a href="#">Careers</a>
            <a href="#">Salaries</a>
            <a href="#">Companies</a>
        </div>

        @auth
            <div class="space-x-6 font-bold flex">
                <x-section-heading color="blue">
                    <a href="/jobs/create">Post a Job</a>
                </x-section-heading>

                <form method="POST" action="/logout">
                    @csrf
                    @method('DELETE')

                    <button>Log Out</button>
                </form>
            </div>
        @endauth

        @guest
            <div class="space-x-6 font-bold">
                <a href="/register">Sign Up</a>
                <a href="/login">Log In</a>
            </div>
        @endguest
    </nav>

    <main class="my-10 max-w-[986px] mx-auto">
        {{ $slot }}
    </main>

</div>

</body>
</html>
