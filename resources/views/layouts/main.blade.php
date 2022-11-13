@extends('layouts/base')


@section('body')

<body class="py-5 md:py-0">
    @yield('content')

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
    {{-- script toast --}}
    <script>
        const toast = document.getElementById('toast');

            if(toast) {
                toast.classList.remove('invisible');
                setTimeout(() => {
                    toast.classList.add('invisible');
                }, 3000);
            }
    </script>
    <!-- END: Toasts -->

    <!-- BEGIN: JS Assets-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"
        integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- END: JS Assets-->


    <!-- BEGIN: Stack navbar-script-->
    @stack('navbar-script')
    <!-- END: Stack Navbar-script-->

    <!-- BEGIN: Stack setting-modal location :user/setting-->
    @stack('setting-modal')
    <!-- END: Stack setting-modal-->

    <!-- BEGIN: Stack deleteAddress-modal location :user/address-->
    @stack('deleteAddress-modal')
    <!-- END: Stack deleteAddress-modal-->

    <!-- BEGIN: Stack regionDropdown location :user/address-->
    @stack('regionDropdown')
    <!-- END: Stack regionDropdown-->

    <!-- BEGIN: Stack updateAddress location :user/address-->
    @stack('updateAddress')
    <!-- END: Stack updateAddress-->


</body>
@endsection
