<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Dashboard')</title>

    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
</head>
<body>

    @include('components.dashboard.topbar')

    <div class="dashboard-container">

        @include('components.dashboard.sidebar')

        <main>
            @yield('content')
        </main>

    </div>

</body>
</html>