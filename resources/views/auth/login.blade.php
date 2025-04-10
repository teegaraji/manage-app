<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

    @vite('resources/css/app.css')

<body class="">
    <div class="max-w-md mx-auto mt-10">
        <h1 class="text-2xl font-bold mb-4">Login</h1>
        @if (session('error'))
            <p class="text-red-500">{{ session('error') }}</p>
        @endif
        <form action="{{ route('login') }}" method="POST" class="space-y-4">
            @csrf
            <input type="email" name="email" placeholder="Email" class="w-full p-2 border" required>
            <input type="password" name="password" placeholder="Password" class="w-full p-2 border" required>
            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Login</button>
        </form>
    </div>
</body>

</html>
