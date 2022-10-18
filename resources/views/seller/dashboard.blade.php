@extends('../layouts/side-bar')

@section('subhead')
<title>Dashboard - Tokommerce</title>
@endsection

@section('subcontent')
<div class="py-3 px-4">
    @include('layouts/navbar-dashboard')

    <div class="my-4 py-28 px-4">
        <div class="flex overflow-hidden justify-between px-2">
            <span class="text-xl text-white font-medium">General Reports</span>
            <span class="text-base text-white font-medium flex gap-x-1 items-center">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-4 h-4">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M16.023 9.348h4.992v-.001M2.985 19.644v-4.992m0 0h4.992m-4.993 0l3.181 3.183a8.25 8.25 0 0013.803-3.7M4.031 9.865a8.25 8.25 0 0113.803-3.7l3.181 3.182m0-4.991v4.99" />
                </svg>
                Reload
            </span>
        </div>
        <div class="mt-4">
            <div class="grid  grid-cols-4 gap-6">
                <div class="stats shadow">

                    <div class="stat">
                        <div class="stat-title">Total Page Views</div>
                        <div class="stat-value">89,400</div>
                        <div class="stat-desc">21% more than last month</div>
                    </div>

                </div>
                <div class="stats shadow">

                    <div class="stat">
                        <div class="stat-title">Total Page Views</div>
                        <div class="stat-value">89,400</div>
                        <div class="stat-desc">21% more than last month</div>
                    </div>

                </div>
                <div class="stats shadow">

                    <div class="stat">
                        <div class="stat-title">Total Page Views</div>
                        <div class="stat-value">89,400</div>
                        <div class="stat-desc">21% more than last month</div>
                    </div>

                </div>
                <div class="stats shadow">

                    <div class="stat">
                        <div class="stat-title">Total Page Views</div>
                        <div class="stat-value">89,400</div>
                        <div class="stat-desc">21% more than last month</div>
                    </div>

                </div>


            </div>
        </div>
    </div>

</div>
@endsection
