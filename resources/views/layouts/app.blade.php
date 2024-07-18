<!DOCTYPE html>
<html>
<head>
    <title>Maintenance Request System</title>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    @livewireStyles
</head>
<body>
    <div id="app">
        @yield('content')
    </div>

    <script src="{{ mix('js/app.js') }}"></script>
    @livewireScripts
</body>
</html>
