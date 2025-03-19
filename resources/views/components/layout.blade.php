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
          <img src="{{ Vite::asset('resources/images/logo.svg') }}" alt="">
        </a>
      </div>

      <div class="space-x-9 font-bold">
        <a href="#">Jobs</a>
        <a href="#">Careers</a>
        <a href="#">Salaries</a>
        <a href="#">Companies</a>
      </div>

      <div>
        <x-section-heading color="blue">
          <a href="">Post a Job</a>
        </x-section-heading>
      </div>
    </nav>

    <main class="my-10 max-w-[986px] mx-auto">
      {{ $slot }}
    </main>

  </div>

</body>
</html>
