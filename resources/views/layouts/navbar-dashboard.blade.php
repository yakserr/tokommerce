<div id="navbar_parent" class="navbar fixed flex justify-between w-4/5 bg-primary rounded-md m-2 z-50">

    <!-- BEGIN: Breadcrumbs -->
    <div class="text-xs breadcrumbs">
        <ul>
            <li class="text-white"><a>Home</a></li>
            <li class="text-white"><a>Dashboard</a></li>
        </ul>
    </div>
    <!-- END: Breadcrumbs -->

    <div class="flex-none">
        <div class="dropdown dropdown-end">
            <label tabindex="0" class="btn btn-ghost btn-circle">
                <div class="indicator">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                    </svg>
                    <span class="badge badge-sm indicator-item">8</span>
                </div>
            </label>
            <div tabindex="0" class="mt-3 card card-compact dropdown-content w-52 bg-base-100 shadow">
                <div class="card-body">
                    <span class="font-bold text-lg">8 Items</span>
                    <span class="text-info">Subtotal: $999</span>
                    <div class="card-actions">
                        <button class="btn btn-primary btn-block">View cart</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="dropdown dropdown-end">
            <label tabindex="0" class="btn btn-ghost btn-circle avatar">
                <div class="w-10 rounded-full">
                    <img src="https://placeimg.com/80/80/people" />
                </div>
            </label>
            <ul tabindex="0"
                class="menu menu-compact dropdown-content mt-3 p-2 shadow bg-primary-content rounded-box w-52 text-dark-purple">
                <li>
                    <a class="justify-between">
                        Profile
                        <span class="badge">New</span>
                    </a>
                </li>
                <li><a>Settings</a></li>

                <li>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <a onclick="event.preventDefault();
                        this.closest('form').submit();">
                            {{ __('Log Out') }}
                        </a>
                    </form>
                </li>
            </ul>
        </div>
    </div>
</div>

@push('navbar-script')
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
@endpush
