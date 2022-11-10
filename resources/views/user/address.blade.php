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
                <a href="{{ route('user.settings.index') }}">
                    <div class="text-gray-300 text-sm flex items-center gap-x-2 cursor-pointer p-2 hover:bg-light-white rounded-md mt-2
                    @if (request()->routeIs('user.settings.index')) ? bg-light-white : '' @endif">
                        <span class="text-2xl block float-left">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="w-5 h-5">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M15 9h3.75M15 12h3.75M15 15h3.75M4.5 19.5h15a2.25 2.25 0 002.25-2.25V6.75A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25v10.5A2.25 2.25 0 004.5 19.5zm6-10.125a1.875 1.875 0 11-3.75 0 1.875 1.875 0 013.75 0zm1.294 6.336a6.721 6.721 0 01-3.17.789 6.721 6.721 0 01-3.168-.789 3.376 3.376 0 016.338 0z" />
                            </svg>

                        </span>
                        <span class="text-sm font-medium duration-100 flex-1">
                            Personal Data
                        </span>
                    </div>
                </a>
                <a href="{{ route('user.address.index') }}">
                    <div class="text-gray-300 text-sm flex items-center gap-x-2 cursor-pointer p-2 hover:bg-light-white rounded-md mt-2
                    @if (request()->routeIs('user.address.index')) ? bg-light-white : '' @endif">
                        <span class="text-2xl block float-left">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="w-5 h-5">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M13.5 21v-7.5a.75.75 0 01.75-.75h3a.75.75 0 01.75.75V21m-4.5 0H2.36m11.14 0H18m0 0h3.64m-1.39 0V9.349m-16.5 11.65V9.35m0 0a3.001 3.001 0 003.75-.615A2.993 2.993 0 009.75 9.75c.896 0 1.7-.393 2.25-1.016a2.993 2.993 0 002.25 1.016c.896 0 1.7-.393 2.25-1.016a3.001 3.001 0 003.75.614m-16.5 0a3.004 3.004 0 01-.621-4.72L4.318 3.44A1.5 1.5 0 015.378 3h13.243a1.5 1.5 0 011.06.44l1.19 1.189a3 3 0 01-.621 4.72m-13.5 8.65h3.75a.75.75 0 00.75-.75V13.5a.75.75 0 00-.75-.75H6.75a.75.75 0 00-.75.75v3.75c0 .415.336.75.75.75z" />
                            </svg>

                        </span>
                        <span class="text-sm font-medium duration-100 flex-1">
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
                            <input type="text" placeholder="Search…" class="input input-bordered text-sm" />
                            <button class="btn btn-square">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                                </svg>
                            </button>
                        </div>
                    </div>
                    <div class="flex gap-4">
                        <!-- The button to open modal -->
                        <label for="modal-createAddress" id="new-address" class="btn gap-2 text-xs modal-button">
                            Create New Address
                            @if ($errors->any())
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                class="stroke-error flex-shrink-0 w-5 h-5">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            @endif
                        </label>
                    </div>
                </div>
                @foreach ($addresses as $address)
                <div class="card w-full bg-base-100 text-primary-content">
                    <div class="flex items-center">
                        <div class="card-body text-sm">
                            <div class="flex gap-2 items-center">
                                <h2 class="card-title text-bold text-base">{{ $address->label_address }}</h2>
                                @if ($address->is_default == 1)
                                <span class="badge text-xs">Utama</span>
                                @endif
                            </div>
                            <p class="text-base font-bold">{{ $address->recipient_name }}</p>
                            <p>6287887186724</p>
                            <p>{{ $address->address }}</p>
                            <div class="mb-0 flex gap-2">
                                <label class="text-teal-500 text-normal cursor-pointer" for="modal-updateAddress"
                                    id="changeAddress" data-id="{{ $address->id }}"
                                    data-address="{{ json_encode($address) }}">
                                    Change address
                                </label>
                                @if ($address->is_default != 1)
                                <div class="divider divider-horizontal mx-0.5"></div>
                                <form action="{{ route('user.address.isDefault', $address->id) }}" method="POST">
                                    @csrf
                                    @method('PUT')
                                    <input type="hidden" name="user_id" value="{{ $address->user_id }}">
                                    <button type="submit" class="text-teal-500 text-normal cursor-pointer"
                                        id="changeDefaultAddress">
                                        Make as default
                                    </button>
                                </form>
                                @endif
                                <div class="divider divider-horizontal mx-0.5"></div>
                                <label for="deleteAddress-modal" data-id="{{$address->id }}"
                                    data-name="{{ $address->label_address }}" id="deletebtn"
                                    class="text-teal-500 text-normal cursor-pointer">
                                    Delete address
                                </label>
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
                @endforeach
            </div>
            <!-- END: Content-->
        </div>
    </div>
</div>
@endsection

<!-- BEGIN: Create Address & RegionDropdown dependencies Modal-->
@push('regionDropdown')
<input type="checkbox" id="modal-createAddress" class="modal-toggle" />
<label for="modal-createAddress" class="modal cursor-pointer">
    <label class="modal-box  max-w-2xl relative" for="">
        <h3 class="text-lg font-bold text-center">New Address</h3>
        <label for="modal-createAddress" class="btn btn-sm btn-circle absolute right-2 top-2">✕</label>
        <form action="{{ route('user.address.store') }}" method="POST" id="createAddress">
            @csrf
            <input type="hidden" name="user_id" value="{{ Auth::user()->id }}" class="form-control">
            <div>
                <label class="label">
                    <span class="label-text text-sm font-medium">Label Address</span>
                </label>
                <input type="text" name="label_address" id="label_address" placeholder="e.g Home, Apartment, Office"
                    class="input input-bordered w-full max-w-xs" value="{{ old('label_address') }}" required />
            </div>
            @error('label_address')
            <span class="text-red-500 text-xs">{{ $message }}</span>
            @enderror
            <div class="flex gap-4">
                <div>
                    <label class="label">
                        <span class="label-text text-sm font-medium">Recipient's name</span>
                    </label>
                    <input type="text" name="recipient_name" id="recipient_name" placeholder="Citra"
                        class="input input-bordered w-full max-w-xs" value="{{ old('recipient_name') }}" required />
                    @error('recipient_name')
                    <span class="text-red-500 text-xs">{{ $message }}</span>
                    @enderror
                </div>
                <div>
                    <label class="label">
                        <span class="label-text text-sm font-medium">Phone Number</span>
                    </label>
                    <input type="number" placeholder="08xxxxxxxxxx" name="phone" id="phone"
                        class="input input-bordered w-full max-w-xs" value="{{ old('phone') }}" required />
                    @error('phone')
                    <span class="text-red-500 text-xs">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="flex justify-between gap-4">
                <div class="w-full">
                    <label class="label">
                        <span class="label-text text-sm font-medium">Province</span>
                    </label>
                    <select class="select select-bordered w-full max-w-xs" name="province_id" id="province" required>
                        <option value="">Select province</option>
                        @foreach ($provinces as $province)
                        <option value="{{ $province->id }}">{{ $province->name }}</option>
                        @endforeach
                    </select>
                    @error('province_id')
                    <span class="text-red-500 text-xs">{{ $message }}</span>
                    @enderror
                </div>
                <div class="w-full">
                    <label class="label">
                        <span class="label-text text-sm font-medium">cities</span>
                    </label>
                    <select class="select select-bordered w-full max-w-xs" name="city_id" id="city" disabled>
                        <option value="">Select city</option>
                    </select>
                    @error('city_id')
                    <span class="text-red-500 text-xs">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="flex justify-between gap-4">
                <div class="w-full">
                    <label class="label">
                        <span class="label-text text-sm font-medium">Districts</span>
                    </label>
                    <select class="select select-bordered w-full max-w-xs" name="district_id" id="district" disabled>
                        <option value="">Select district</option>
                    </select>
                    @error('district_id')
                    <span class="text-red-500 text-xs">{{ $message }}</span>
                    @enderror
                </div>
                <div class="w-full">
                    <label class="label">
                        <span class="label-text text-sm font-medium">Villages</span>
                    </label>
                    <select class="select select-bordered w-full max-w-xs" name="village_id" id="village" disabled>
                        <option value="">Select village</option>
                    </select>
                    @error('village_id')
                    <span class="text-red-500 text-xs">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div>
                <label class="label">
                    <span class="label-text text-sm font-medium">Zip Code</span>
                </label>
                <input type="text" placeholder="56371" name="zip_code" id="zip_code"
                    class="input input-bordered w-full max-w-xs" value="{{ old('zip_code') }}" required />
            </div>
            @error('zip_code')
            <span class="text-red-500 text-xs">{{ $message }}</span>
            @enderror
            <div>
                <label class="label">
                    <span class="label-text text-sm font-medium">Full Address</span>
                </label>
                <textarea name="address" id="address" class="textarea textarea-bordered w-full"
                    placeholder="Desa RTxx RWxx, Dusun, Kecamatan, Kabupaten" required>{{ old('address') }}</textarea>
                @error('address')
                <span class="text-red-500 text-xs">{{ $message }}</span>
                @enderror
            </div>
            <div>
                <label class="label">
                    <span class="label-text text-sm font-medium">Notes</span>
                </label>
                <textarea name="notes" id="notes" class="textarea textarea-bordered w-full"
                    placeholder="Additional Notes : Belakang Pabrik Kucing">{{ old('notes') }}</textarea>
                @error('notes')
                <span class="text-red-500 text-xs">{{ $message }}</span>
                @enderror
            </div>
            <div class="mt-2">
                <label class="cursor-pointer">
                    <span class="label-text text-sm font-medium">Make Address as default</span>
                    <input type="checkbox" name="is_default" id="is_default" value="1"
                        class="checkbox checkbox-primary" />
                </label>
            </div>

            <div class="modal-action">
                <button type="reset" class="btn btn-sm btn-error">
                    Reset
                </button>
                <button type="submit" class="btn btn-sm">
                    Submit
                </button>
            </div>
            </div>
        </form>
    </label>
</label>

<script>
    $(document).on('click', '#new-address', function() {
        $('#createAddress').trigger('reset');
    })

    function onChangeSelect(url, id, name) {
        $.ajaxSetup({
            headers: {
                "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
            },
        });

        $.ajax({
            url: url,
            type: "GET",
            data: {
                id: id,
            },
            success: function (data) {
                const arrRegion = ["province", "city", "district", "village"];
                const index = arrRegion.indexOf(name);
                for (let i = index; i < arrRegion.length; i++) {
                    $(`#${arrRegion[i]}`).empty();
                    $(`#${arrRegion[i + 1]}`).prop("disabled", true);
                    $(`#${arrRegion[i]}`).append(
                        `<option value="">Select ${arrRegion[i]}</option>`
                    );
                }

                $.each(data, function (key, value) {
                    $("#" + name).append(
                        '<option value="' + key + '">' + value + "</option>"
                    );
                });
            },
        });
    }

    $(function () {
        $("#province").on("change", function () {
            $("#city").prop("disabled", false);
            onChangeSelect('{{ route("cities") }}', $(this).val(), "city");
        });
        $("#city").on("change", function () {
            $("#district").prop("disabled", false);
            onChangeSelect('{{ route("districts") }}', $(this).val(), "district");
        });
        $("#district").on("change", function () {
            $("#village").prop("disabled", false);
            onChangeSelect('{{ route("villages") }}', $(this).val(), "village");
        });
    });
</script>
@endpush
<!-- END: Create Address & RegionDropdown dependencies Modal-->

<!-- BEGIN: Modal Delete Address -->
@push('deleteAddress-modal')
<form action="" method="POST" id="formDeleteAddress">
    @csrf
    @method('DELETE')
    <input type="checkbox" id="deleteAddress-modal" class="modal-toggle" />
    <label for="deleteAddress-modal" class="modal cursor-pointer">
        <label class="modal-box relative" for="">
            <label for="deleteAddress-modal" class="btn btn-sm btn-circle absolute right-2 top-2">✕</label>
            <h3 class="text-base font-bold text-center">Delete Address</h3>
            <p class="py-4 text-base text-center" id="modalMessage"></p>
            <div class="modal-action">
                <button type="submit" class="btn btn-sm">Submit</button>
            </div>
        </label>
    </label>
</form>

<script>
    $(document).on('click','#deletebtn', function() {

            let id = $(this).data('id');
            let name = $(this).data('name');
            $('#modalMessage').text('Are you sure want to delete address ' + name + '?');

            // put url into form with attribute action
            let url = "{{ route('user.address.destroy',':id') }}";
            url = url.replace(':id', id);
            $('#formDeleteAddress').attr('action', url);
    });
</script>
@endpush
<!-- END: Modal Delete Address -->

<!-- BEGIN: Change address Modal and Update Address-->
@push('updateAddress')
<input type="checkbox" id="modal-updateAddress" class="modal-toggle" />
<label for="modal-updateAddress" class="modal cursor-pointer">
    <label class="modal-box  max-w-2xl relative" for="">
        <h3 class="text-lg font-bold text-center">create new one and delete the address :p</h3>
        <label for="modal-updateAddress" class="btn btn-sm btn-circle absolute right-2 top-2">✕</label>
    </label>
</label>
@endpush
<!-- END: Change address Modal and Update Address-->
