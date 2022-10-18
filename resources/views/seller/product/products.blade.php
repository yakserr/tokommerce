@extends('../../layouts/side-bar')

@section('subhead')
<title>Product - Tokommerce</title>
@endsection

@section('subcontent')
<div class="py-3 px-4">
    @include('layouts/navbar-dashboard')

    <div class="my-4 py-28 px-4">
        <div class="block overflow-hidden justify-between px-2">
            <span class="text-xl text-white font-medium">Product List</span>
        </div>
        <div class="flex justify-between items-center my-6 mx-2">
            <div class="flex gap-4">
                <button class="btn text-sm">Add Product</button>
                <div class="dropdown dropdown-right">
                    <button class="btn btn-square" tabindex=0>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" strokee-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                        </svg>

                    </button>
                    <ul tabindex="0" class="dropdown-content menu p-2 shadow rounded-box w-52 mx-2 bg-white">
                        <li class="text-black"><a>Item 2</a></li>
                        <li class="text-black"><a>Item 1</a></li>
                    </ul>
                </div>
            </div>

            <span class="text-gray-500">showing list 1 to 10 of 150 entries </span>
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
        </div>
        <div>
            <div class="overflow-x-auto">
                <table class="table w-full">
                    <!-- head -->
                    <thead>
                        <tr>
                            <th>images</th>
                            <th>Product Name</th>
                            <th>Price</th>
                            <th>Stock</th>
                            <th>Weight</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- row 1 -->
                        <tr class="hover">
                            <th>
                                <div class="avatar-group -space-x-8">
                                    <div class="avatar">
                                        <div class="w-12">
                                            <img src="https://placeimg.com/192/192/people" />
                                        </div>
                                    </div>
                                    <div class="avatar">
                                        <div class="w-12">
                                            <img src="https://placeimg.com/192/192/people" />
                                        </div>
                                    </div>
                                    <div class="avatar">
                                        <div class="w-12">
                                            <img src="https://placeimg.com/192/192/people" />
                                        </div>
                                    </div>

                                </div>
                            </th>
                            <td>
                                <div>
                                    <div>Cy Ganderton</div>
                                    <div>
                                        <div class="badge badge-accent">accent</div>
                                        <div class="badge badge-outline">neutral</div>
                                    </div>
                                </div>
                            </td>
                            <td>49000</td>
                            <td>30</td>
                            <td>500g</td>
                            <td>
                                <div class="badge badge-success gap-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-3 h-3">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M4.5 12.75l6 6 9-13.5" />
                                    </svg>
                                    Active
                                </div>
                            </td>
                            <td>
                                <div class="btn-group gap-1">
                                    <button class="btn btn-sm btn-outline btn-info gap-1">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                                        </svg>
                                        Edit
                                    </button>
                                    <button class="btn btn-sm btn-outline btn-error gap-1">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                                        </svg>
                                        Delete
                                    </button>
                                </div>
                            </td>
                        </tr>
                        <!-- row 2 -->
                        <tr class="hover">
                            <th>
                                <div class="avatar-group -space-x-8">
                                    <div class="avatar">
                                        <div class="w-12">
                                            <img src="https://placeimg.com/192/192/people" />
                                        </div>
                                    </div>
                                    <div class="avatar">
                                        <div class="w-12">
                                            <img src="https://placeimg.com/192/192/people" />
                                        </div>
                                    </div>
                                    <div class="avatar">
                                        <div class="w-12">
                                            <img src="https://placeimg.com/192/192/people" />
                                        </div>
                                    </div>
                                </div>
                            </th>
                            <td>
                                <div class="inline">
                                    <div>Hart Hagerty</div>
                                    <div>
                                        <div class="badge badge-accent">accent</div>
                                        <div class="badge badge-outline">neutral</div>
                                    </div>
                                </div>
                            </td>
                            <td>60000</td>
                            <td>70</td>
                            <td>500g</td>
                            <td>
                                <div class="badge badge-error gap-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-3 h-3">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                                    </svg>

                                    Inactive
                                </div>
                            </td>
                            <td>
                                <div class="btn-group gap-1">
                                    <button class="btn btn-sm btn-outline btn-info gap-1">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                                        </svg>
                                        Edit
                                    </button>
                                    <button class="btn btn-sm btn-outline btn-error gap-1">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                                        </svg>
                                        Delete
                                    </button>
                                </div>
                            </td>
                        </tr>
                        <!-- row 2 -->
                        <tr class="hover">
                            <th>
                                <div class="avatar-group -space-x-8">
                                    <div class="avatar">
                                        <div class="w-12">
                                            <img src="https://placeimg.com/192/192/people" />
                                        </div>
                                    </div>
                                    <div class="avatar">
                                        <div class="w-12">
                                            <img src="https://placeimg.com/192/192/people" />
                                        </div>
                                    </div>
                                    <div class="avatar">
                                        <div class="w-12">
                                            <img src="https://placeimg.com/192/192/people" />
                                        </div>
                                    </div>
                                </div>
                            </th>
                            <td>
                                <div class="inline">
                                    <div>Hart Hagerty</div>
                                    <div>
                                        <div class="badge badge-accent">accent</div>
                                        <div class="badge badge-outline">neutral</div>
                                    </div>
                                </div>
                            </td>
                            <td>60000</td>
                            <td>70</td>
                            <td>500g</td>
                            <td>
                                <div class="badge badge-success gap-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-3 h-3">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M4.5 12.75l6 6 9-13.5" />
                                    </svg>
                                    Active
                                </div>
                            </td>
                            <td>
                                <div class="btn-group gap-1">
                                    <button class="btn btn-sm btn-outline btn-info gap-1">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                                        </svg>
                                        Edit
                                    </button>
                                    <button class="btn btn-sm btn-outline btn-error gap-1">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                                        </svg>
                                        Delete
                                    </button>
                                </div>
                            </td>
                        </tr>

                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
@endsection
