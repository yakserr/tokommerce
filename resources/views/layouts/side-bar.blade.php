@extends('layouts.main')

@section('head')
@yield('subhead')
@endsection

@section('content')
<div class="flex overflow-hidden min-h-screen">
    <!-- BEGIN: Side Menu -->

    <div id="parent-sidebar" class="relative p-5 pt-8 duration-300 w-72 bg-base-300">
        <!-- BEGIN: Icon -->
        <svg xmlns="http://www.w3.org/2000/svg" onclick="toggleSideBar()" fill="none" viewBox="0 0 24 24"
            stroke-width="1.5" stroke="currentColor" id="sidebar-icon"
            class="absolute items-center bg-white rounded-full cursor-pointer w-8 h-8 text-dark-purple -right-3 top-9 border-2 border-dark-purple">
            <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 15.75L3 12m0 0l3.75-3.75M3 12h18" />
        </svg>

        <div class="inline-flex items-center">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor"
                class="block float-left w-9 h-9 mr-2 text-white rounded cursor-pointer bg-amber-300">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M3.75 13.5l10.5-11.25L12 10.5h8.25L9.75 21.75 12 13.5H3.75z" />
            </svg>
            <h1 id="logo-title" class=" duration-300 text-2xl font-medium text-white origin-left">
                <img src="{{ asset('dist/images/tokommerce.png') }}" alt="" class="w-48">
            </h1>
        </div>

        <!-- END: Icon -->

        <!-- BEGIN: Menu -->

        <div id="search-sidebar" class="flex items-center rounded-md bg-light-white mt-4 py-2 px-2 gap-x-2 tooltip"
            data-tip="Search">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" class="w-6 h-6 text-white text-lg block float-left cursor-pointer">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
            </svg>
            <input placeholder="search" id="input-sidebar"
                class="text-base bg-transparent w-full text-white border-none focus:outline-none">
        </div>

        <ul class="pt-2">
            <a href="{{ route('seller.dashboard') }}">
                <li class="text-gray-300 text-sm flex items-center gap-x-4 cursor-pointer p-2 hover:bg-light-white rounded-md mt-2
                @if (request()->routeIs('seller.dashboard')) ? bg-light-white : '' @endif">
                    <span class="text-2xl block float-left">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M2.25 12l8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
                        </svg>
                    </span>
                    <span class=" menu-title text-base font-medium duration-100 flex-1">
                        Dashboard
                    </span>
                </li>
            </a>
            <a href="{{ route('products.index') }}">
                <li class="text-gray-300 text-sm flex items-center gap-x-4 cursor-pointer p-2 hover:bg-light-white rounded-md mt-2
                @if (request()->routeIs('products.index')) ? bg-light-white : '' @endif">
                    <span class="text-2xl block float-left">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M15.75 10.5V6a3.75 3.75 0 10-7.5 0v4.5m11.356-1.993l1.263 12c.07.665-.45 1.243-1.119 1.243H4.25a1.125 1.125 0 01-1.12-1.243l1.264-12A1.125 1.125 0 015.513 7.5h12.974c.576 0 1.059.435 1.119 1.007zM8.625 10.5a.375.375 0 11-.75 0 .375.375 0 01.75 0zm7.5 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z" />
                        </svg>
                    </span>
                    <span class=" menu-title text-base font-medium duration-100 flex-1">
                        Products
                    </span>
                </li>
            </a>
            <a href="{{ route('setting.index') }}">
                <li
                    class="text-gray-300 text-sm flex items-center gap-x-4 cursor-pointer p-2 hover:bg-light-white rounded-md mt-2
                @if (request()->routeIs('setting.index') || request()->routeIs('setting.address.index')) ? bg-light-white : '' @endif">
                    <span class="text-2xl block float-left">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M9.594 3.94c.09-.542.56-.94 1.11-.94h2.593c.55 0 1.02.398 1.11.94l.213 1.281c.063.374.313.686.645.87.074.04.147.083.22.127.324.196.72.257 1.075.124l1.217-.456a1.125 1.125 0 011.37.49l1.296 2.247a1.125 1.125 0 01-.26 1.431l-1.003.827c-.293.24-.438.613-.431.992a6.759 6.759 0 010 .255c-.007.378.138.75.43.99l1.005.828c.424.35.534.954.26 1.43l-1.298 2.247a1.125 1.125 0 01-1.369.491l-1.217-.456c-.355-.133-.75-.072-1.076.124a6.57 6.57 0 01-.22.128c-.331.183-.581.495-.644.869l-.213 1.28c-.09.543-.56.941-1.11.941h-2.594c-.55 0-1.02-.398-1.11-.94l-.213-1.281c-.062-.374-.312-.686-.644-.87a6.52 6.52 0 01-.22-.127c-.325-.196-.72-.257-1.076-.124l-1.217.456a1.125 1.125 0 01-1.369-.49l-1.297-2.247a1.125 1.125 0 01.26-1.431l1.004-.827c.292-.24.437-.613.43-.992a6.932 6.932 0 010-.255c.007-.378-.138-.75-.43-.99l-1.004-.828a1.125 1.125 0 01-.26-1.43l1.297-2.247a1.125 1.125 0 011.37-.491l1.216.456c.356.133.751.072 1.076-.124.072-.044.146-.087.22-.128.332-.183.582-.495.644-.869l.214-1.281z" />
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                        </svg>

                    </span>
                    <span class=" menu-title text-base font-medium duration-100 flex-1">
                        Setting
                    </span>
                </li>
            </a>
        </ul>
        <!-- END: Menu -->

    </div>
    <!-- END: Side Menu -->

    <!-- BEGIN: Content -->
    <div class="content w-full">
        @yield('subcontent')
    </div>
    <!-- END: Content -->
</div>
@endsection

@section('script')

<script>
    function toggleSideBar() {
        parent_sidebar = document.getElementById('parent-sidebar');
        sidebar_icon = document.getElementById('sidebar-icon');
        logo_title = document.getElementById('logo-title');
        input_sidebar = document.getElementById('input-sidebar');
        search_sidebar = document.getElementById('search-sidebar');
        menu_title = document.querySelectorAll('.menu-title');
        navbar_parent = document.getElementById('navbar_parent');

        sidebar_icon.classList.toggle('rotate-180');
        logo_title.classList.toggle('hidden');
        input_sidebar.classList.toggle('hidden');


        menu_title.forEach(el => {
            el.classList.toggle('hidden');
        })

        if (parent_sidebar.classList.contains('w-72')) {
            // from open to close
            parent_sidebar.classList.remove('w-72');
            parent_sidebar.classList.add('w-20');
            navbar_parent.classList.remove('w-4/5');
            navbar_parent.classList.add('w-11/12');
        } else {
            // from close to open
            parent_sidebar.classList.remove('w-20');
            parent_sidebar.classList.add('w-72');
            navbar_parent.classList.remove('w-11/12');
            navbar_parent.classList.add('w-4/5');
        }
    }
</script>
@endsection
