<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>



    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">


    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

</head>
<body id="container">
    <div class="container=fluid" >
        <main class="py-4">
            {{-- @if (session()->has('authError')) --}}
                {{-- <x-package-alert title="sorry" type="danger" message="{{session()->get('authError')}}"></x-package-alert> --}}
            {{-- @endif --}}

            @if ($errors->any())
                <x-package-modal type="danger" title="خطا !!"     content="خطا در وارد کردن اطلاعات" />
            @endif

            @yield('content')

        </main>

    </div>




    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" ></script>
    {{-- show automatically modal status --}}

    {{-- custome script --}}
    <script defer>
        $("#modalStatus").modal('show')
    </script>

    @yield('script')


</body>
</html>
