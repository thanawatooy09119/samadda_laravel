<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>SAMADDA</title>
</head>

<body>
    <div class="wrapper">
        @include('layouts.navbar')

        <div class="content">
            @yield('content')
        </div>
    </div>

    @include('layouts.footer')


    <style>
        html,
        body {
            height: 100%;
        }

        .content {
            padding: 36px;
        }
    </style>

@vite('resources/js/app.js')
<script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('js/jquery.min.js') }}"></script>
@yield('scripts')
</body>

</html>
