@extends('../layouts/side-bar')

@section('subhead')
<title>Dashboard - Tokommerce</title>
@endsection

@section('subcontent')
<div class="py-3 px-4">
    @include('layouts/navbar-dashboard')

    <div class="my-4 py-16 px-4">

        <div class="bg-base-300 my-8 mx-2 py-2 px-4 min-h-screen rounded-2xl">
            <!-- BEGIN: Top Menu-->
            <div class="flex justify-center gap-4 pb-2 border-b-2 border-teal-300 border-spacing-8">
                <a href="{{ route('setting.index') }}">
                    <div class="text-gray-300 text-sm flex items-center gap-x-2 cursor-pointer p-2 hover:bg-light-white rounded-md mt-2
                    @if (request()->routeIs('setting.index')) ? bg-light-white : '' @endif">
                        <span class="text-2xl block float-left">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M15 9h3.75M15 12h3.75M15 15h3.75M4.5 19.5h15a2.25 2.25 0 002.25-2.25V6.75A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25v10.5A2.25 2.25 0 004.5 19.5zm6-10.125a1.875 1.875 0 11-3.75 0 1.875 1.875 0 013.75 0zm1.294 6.336a6.721 6.721 0 01-3.17.789 6.721 6.721 0 01-3.168-.789 3.376 3.376 0 016.338 0z" />
                            </svg>

                        </span>
                        <span class="text-base font-medium duration-100 flex-1">
                            Personal Data
                        </span>
                    </div>
                </a>
                <a href="{{ route('setting.address.index') }}">
                    <div class="text-gray-300 text-sm flex items-center gap-x-2 cursor-pointer p-2 hover:bg-light-white rounded-md mt-2
                    @if (request()->routeIs('setting.address.index')) ? bg-light-white : '' @endif">
                        <span class="text-2xl block float-left">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M13.5 21v-7.5a.75.75 0 01.75-.75h3a.75.75 0 01.75.75V21m-4.5 0H2.36m11.14 0H18m0 0h3.64m-1.39 0V9.349m-16.5 11.65V9.35m0 0a3.001 3.001 0 003.75-.615A2.993 2.993 0 009.75 9.75c.896 0 1.7-.393 2.25-1.016a2.993 2.993 0 002.25 1.016c.896 0 1.7-.393 2.25-1.016a3.001 3.001 0 003.75.614m-16.5 0a3.004 3.004 0 01-.621-4.72L4.318 3.44A1.5 1.5 0 015.378 3h13.243a1.5 1.5 0 011.06.44l1.19 1.189a3 3 0 01-.621 4.72m-13.5 8.65h3.75a.75.75 0 00.75-.75V13.5a.75.75 0 00-.75-.75H6.75a.75.75 0 00-.75.75v3.75c0 .415.336.75.75.75z" />
                            </svg>

                        </span>
                        <span class="text-base font-medium duration-100 flex-1">
                            Address List
                        </span>
                    </div>
                </a>
            </div>
            <!-- END: Top Menu-->

            <!-- BEGIN: Content-->
            <div class="p-6 flex overflow-hidden gap-8">
                <!-- BEGIN: Photo Profile-->
                <div class="w-1/3">
                    <div class="bg-base-200 p-4 pb-6 rounded-md">
                        <div class="w-72 h-72 carousel rounded-box">
                            <div class="carousel-item w-full">
                                <img src="https://placeimg.com/256/400/arch" class="w-full "
                                    alt="Tailwind CSS Carousel component" />
                            </div>
                        </div>
                        <label class="block my-6">
                            <span class="sr-only">Choose profile photo</span>
                            <input type="file" class="block w-full text-sm text-slate-500
                                file:mr-4 file:py-2 file:px-4
                                file:rounded-full file:border-0
                                file:text-sm file:font-semibold
                                file:bg-violet-50 file:text-violet-700
                                hover:file:bg-violet-100
                            " />
                        </label>
                        <span class="text-sm">
                            File size: maximum 10,000,000 bytes (10 Megabytes). Allowed file extensions: .JPG .JPEG .PNG
                        </span>
                    </div>
                    <div class="gap-y-2 flex flex-col mt-4">
                        <button class="btn w-full">Change Password</button>
                        <button class="btn glass w-full">Delete Account</button>
                    </div>
                </div>
                <!-- END: Photo Profile-->

                <!-- BEGIN: Form Personal Info-->
                <div class="w-2/3 p-2 pr-32">
                    <p class="font-bold my-6">Change Personal Info</p>
                    <form action="#" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="grid grid-cols-2 gap-4 mt-4">
                            <div class="col-span-2">
                                <label class="flex items-center">
                                    <span class="text-sm font-medium whitespace-nowrap w-48">Name</span>
                                    <p class="mt-1 block w-full">
                                        {{ Auth::user()->name }}
                                    </p>
                                </label>
                            </div>
                            <div class="col-span-2">
                                <label class="flex items-center">
                                    <span class=" text-sm font-medium whitespace-nowrap w-48">Date of
                                        Birth</span>
                                    <p class="mt-1 block w-full">
                                        17 September 2007
                                    </p>
                                </label>
                            </div>
                            <div class="col-span-2">
                                <label class="flex items-center">
                                    <span class="text-sm font-medium whitespace-nowrap w-48">Gender</span>
                                    <p class="mt-1 block w-full">
                                        Male
                                    </p>
                                </label>
                            </div>
                        </div>
                        <p class="font-bold my-6">Change Contact</p>
                        <div class="grid grid-cols-2 gap-4 mt-4">
                            <div class="col-span-2">
                                <label class="flex items-center">
                                    <span class="text-sm font-medium whitespace-nowrap w-48">Email</span>
                                    <p class="mt-1 block w-full">
                                        {{ Auth::user()->email }}
                                    </p>
                                </label>
                            </div>
                            <div class="col-span-2">
                                <label class="flex items-center">
                                    <span class=" text-sm font-medium whitespace-nowrap w-48">
                                        Phone Number
                                    </span>
                                    <p class="mt-1 block w-full">
                                        923476-8866
                                    </p>
                                </label>
                            </div>
                        </div>
                    </form>
                </div>
                <!-- END: Form Personal Info-->
            </div>
            <!-- END: Content-->
        </div>

    </div>
    @endsection
