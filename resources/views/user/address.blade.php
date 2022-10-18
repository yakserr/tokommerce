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
            <div class="p-6 space-y-8 mr-12">
                <div class="flex justify-between items-center my-6 mx-2">
                    <div class="form-control">
                        <div class="input-group">
                            <input type="text" placeholder="Search…" class="input input-bordered" />
                            <button class="btn btn-square">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                                </svg>
                            </button>
                        </div>
                    </div>
                    <div class="flex gap-4">
                        <button class="btn text-sm">Add New Address</button>
                    </div>
                </div>
                <div class="card w-full bg-base-100 text-primary-content">
                    <div class="flex items-center">
                        <div class="card-body">
                            <div class="flex gap-4 items-center">
                                <h2 class="card-title text-bold">Rumah</h2>
                                <span class="badge">Utama</span>
                            </div>
                            <p class="text-xl font-bold">Yassir ANugroho</p>
                            <p>6287887186724</p>
                            <p>Jl. Parakan, Sumber sari sumberdalem rw 1 rt 05 Kec.</p>
                            <div class="text-teal-500 text-normal mt-4">
                                Ubah Alamat
                            </div>
                        </div>
                        <div class="m-8">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="w-6 h-6 text-green-500 font-bold">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                            </svg>

                        </div>
                    </div>

                </div>
                <div class="card w-full bg-base-100 text-primary-content">
                    <div class="flex items-center">
                        <div class="card-body">
                            <div class="flex gap-4 items-center">
                                <h2 class="card-title text-bold">Kantor</h2>
                            </div>
                            <p class="text-xl font-bold">Yassir ANugroho</p>
                            <p>6287887186724</p>
                            <p>Jl. Parakan, Sumber sari sumberdalem rw 1 rt 05 Kec.</p>
                            <div class="text-teal-500 text-normal mt-4">
                                Ubah Alamat
                            </div>
                        </div>
                        <div class="m-8 hidden">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="w-6 h-6 text-green-500 font-bold">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                            </svg>

                        </div>
                    </div>

                </div>
            </div>
            <!-- END: Content-->
        </div>

    </div>
    @endsection
