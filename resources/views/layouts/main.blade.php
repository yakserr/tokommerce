@extends('layouts/base')


@section('body')

<body class="py-5 md:py-0">
    @yield('content')

    <!-- BEGIN: JS Assets-->

    <!-- END: JS Assets-->

    @yield('script')

    @stack('navbar-script')

    @stack('setting-modal')
    <!-- BEGIN: Toasts -->
    <div class="toast toast-end mb-10 invisible" id="toast">
        @if (session('success'))
        <div class="alert alert-success">
            <div>
                <span class="font-medium">
                    {{ session('success') }}
                </span>
            </div>
        </div>
        @elseif (session('error'))
        <div class="alert alert-error">
            <div>
                <span class="font-medium">
                    {{ session('error') }}
                </span>
            </div>
        </div>
        @endif

    </div>
    <!-- END: Toasts -->

    <script>
        const toast = document.getElementById('toast');

        if(toast) {
            toast.classList.remove('invisible');
            setTimeout(() => {
                toast.classList.add('invisible');
            }, 3000);
        }
    </script>
</body>
@endsection
