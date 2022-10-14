@extends('layouts.main')

@section('head')
@yield('subhead')
@endsection

@section('content')
<div class="flex overflow-hidden">
    <!-- BEGIN: Side Menu -->

    <div id="parent-sidebar" class="relative h-screen p-5 pt-8 duration-300 w-72 bg-base-300">
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
            <li
                class="text-gray-300 text-sm flex items-center gap-x-4 cursor-pointer p-2 hover:bg-light-white rounded-md mt-2">
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
            <li
                class="text-gray-300 text-sm flex items-center gap-x-4 cursor-pointer p-2 hover:bg-light-white rounded-md mt-2">
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
            <li
                class="text-gray-300 text-sm flex items-center gap-x-4 cursor-pointer p-2 hover:bg-light-white rounded-md mt-2">
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
