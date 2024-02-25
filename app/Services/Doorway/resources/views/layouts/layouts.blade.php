<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> Doorway | @yield('title') </title>

    {{-- Boostrap CSS --}}
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    {{-- jquery cdn --}}
    <script src="{{ asset('jquery/jquery.min.js') }}"></script>
    {{-- hover effect --}}
    <link rel="stylesheet" href="{{ asset('css/Hover-master/css/hover.css') }}">
    {{-- data table  --}}
    <link rel="stylesheet" href="https://cdn.datatables.net/2.0.0/css/dataTables.dataTables.min.css">
    {{-- toaster --}}
    <link rel="stylesheet" href="{{ asset('jquery/jquery-toast-plugin-master/dist/jquery.toast.min.css') }}">
     {{-- Custom CSS --}}
     <link rel="stylesheet" href="{{ asset('css/doorway.css') }}">
</head>

<body>

    <header>
        {{-- header --}}
         @include('doorway::layouts.components.header')
        {{-- header-end --}}
        {{-- sidebar --}}
        @include('doorway::layouts.components.sidebar')
        {{-- sidebar-end --}}
    </header>

    <main class="main">
        <div class="doorway-sidebar--shadow"></div>
        <div class="doorway-main--content">
            @include('doorway::layouts.components.visit-view-modal')
            @yield('content')
        </div>
    </main>




    {{-- Bootstrap JS  --}}
    <script src="{{ asset('js/app.js') }}"></script>
    {{-- data table --}}
    <script src="https://cdn.datatables.net/2.0.0/js/dataTables.min.js"></script>
    {{-- toast js --}}
    <script src="{{ asset('jquery/jquery-toast-plugin-master/dist/jquery.toast.min.js') }}"></script>
    {{-- Custom Script --}}
    <script src="{{ asset('js/script.js') }}"></script>
</body>

</html>
