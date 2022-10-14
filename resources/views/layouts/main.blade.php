@extends('layouts/base')


@section('body')

<body class="py-5 md:py-0">
    @yield('content')

    <!-- BEGIN: JS Assets-->

    <!-- END: JS Assets-->

    @yield('script')

    @stack('navbar-script')
</body>
@endsection
