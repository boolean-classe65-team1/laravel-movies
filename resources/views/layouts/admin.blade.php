<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>@yield('page_title')</title>
    @yield('script')
</head>


<body>
    <div class="d-flex vh-100">
        @include('admin.partials.sidebar')

        <main class="flex-grow-1">
            @yield('main_content')
        </main>
    </div>
</body>

</html>