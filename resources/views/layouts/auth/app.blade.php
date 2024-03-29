<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ 'Dashboard | ' . config('app.name') }}</title>
    @vite('resources/css/app.css')
</head>

<body>
    <div class="dashboard flex">
        <div class="sidebar w-[300px]">
            @include('layouts.auth.sidebar')
        </div>
        <div class="">
            @include('layouts.auth.header')
            @yield('content')
        </div>
    </div>
</body>

</html>
