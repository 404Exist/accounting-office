@extends('admin::layouts.auth')

@section('title')
Site Settings
@endsection

@section('content')
    <form action="{{ route('admin.settings.update') }}" method="POST" class="mb-10">
        @csrf
        @method('PATCH')
        @if (session()->has('success'))
        <div class="flex items-center bg-green-500 text-sm font-bold px-4 py-3 mb-6 rounded" role="alert">
            <p class="text-white ">{{ session()->get('success') }}</p>
        </div>
        @endif
        {{-- App Name --}}
        <div class="mb-6">
            <label class="d-block mb-2" for="app_name">App Name</label>
            <input
                class="form-control block w-full px-4 py-2 text-xl font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                type="text"
                id="app_name"
                name="app_name"
                placeholder="App Name"
                value="{{ getSetting('app_name') }}"
            />
        </div>
        {{-- Default Locale --}}
        <div class="mb-6">
            <label class="d-block mb-2" for="default_locale">Default Locale</label>
            <select
                class="form-control block w-full px-4 py-2 text-xl font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                id="default_locale"
                name="default_locale"
            >
                <option value="pl" @selected(getSetting('default_locale') == 'pl')>Pl</option>
                <option value="en" @selected(getSetting('default_locale') == 'en')>En</option>
            </select>
        </div>
        {{-- MAIL HOST --}}
        <div class="mb-6">
            <label class="d-block mb-2" for="MAIL_HOST">MAIL HOST</label>
            <input
                class="form-control block w-full px-4 py-2 text-xl font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                type="text"
                id="MAIL_HOST"
                name="MAIL_HOST"
                placeholder="MAIL HOST"
                value="{{ getSetting('MAIL_HOST') }}"
            />
        </div>
        {{-- MAIL PORT --}}
        <div class="mb-6">
            <label class="d-block mb-2" for="MAIL_PORT">MAIL PORT</label>
            <input
                class="form-control block w-full px-4 py-2 text-xl font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                type="number"
                id="MAIL_PORT"
                name="MAIL_PORT"
                placeholder="MAIL PORT"
                value="{{ getSetting('MAIL_PORT') }}"
            />
        </div>
        {{-- MAIL ENCRYPTION --}}
        <div class="mb-6">
            <label class="d-block mb-2" for="MAIL_ENCRYPTION">MAIL ENCRYPTION</label>
            <input
                class="form-control block w-full px-4 py-2 text-xl font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                type="text"
                id="MAIL_ENCRYPTION"
                name="MAIL_ENCRYPTION"
                placeholder="MAIL ENCRYPTION"
                value="{{ getSetting('MAIL_ENCRYPTION') }}"
            />
        </div>
        {{-- MAIL USERNAME --}}
        <div class="mb-6">
            <label class="d-block mb-2" for="MAIL_USERNAME">MAIL USERNAME</label>
            <input
                class="form-control block w-full px-4 py-2 text-xl font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                type="text"
                id="MAIL_USERNAME"
                name="MAIL_USERNAME"
                placeholder="MAIL USERNAME"
                value="{{ getSetting('MAIL_USERNAME') }}"
            />
        </div>
        {{-- MAIL PASSWORD --}}
        <div class="mb-6">
            <label class="d-block mb-2" for="MAIL_PASSWORD">MAIL PASSWORD</label>
            <input
                class="form-control block w-full px-4 py-2 text-xl font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                type="text"
                id="MAIL_PASSWORD"
                name="MAIL_PASSWORD"
                placeholder="MAIL PASSWORD"
                value="{{ getSetting('MAIL_PASSWORD') }}"
            />
        </div>
        {{-- MAIL ADDRESS --}}
        <div class="mb-6">
            <label class="d-block mb-2" for="MAIL_FROM_ADDRESS">MAIL ADDRESS</label>
            <input
                class="form-control block w-full px-4 py-2 text-xl font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                type="text"
                id="MAIL_FROM_ADDRESS"
                name="MAIL_FROM_ADDRESS"
                placeholder="MAIL ADDRESS"
                value="{{ getSetting('MAIL_FROM_ADDRESS') }}"
            />
        </div>
        {{-- Site Colors --}}
        <div class="mb-6 flex justify-between px-6">
            <div class="mx-5" style="flex-grow: 1">
                <label class="d-block mb-2" for="primary_color">Site Primary Color</label>
                <input
                    class="form-control h-10"
                    type="color"
                    id="primary_color"
                    name="primary_color"
                    value="{{ getSetting('primary_color') }}"
                />
            </div>
            <div class="mx-5" style="flex-grow: 1">
                <label class="d-block mb-2" for="secondary_color">Site Secondary Color</label>
                <input
                    class="form-control h-10"
                    type="color"
                    id="secondary_color"
                    name="secondary_color"
                    value="{{ getSetting('secondary_color') }}"
                />
            </div>
        </div>
        {{-- facebook --}}
        <div class="mb-6">
            <label class="d-block mb-2" for="facebook">Facebook</label>
            <input
                class="form-control block w-full px-4 py-2 text-xl font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                type="text"
                id="facebook"
                name="facebook"
                placeholder="Facebook"
                value="{{ getSetting('facebook') }}"
            />
        </div>
        {{-- google --}}
        <div class="mb-6">
            <label class="d-block mb-2" for="google">Google</label>
            <input
                class="form-control block w-full px-4 py-2 text-xl font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                type="text"
                id="google"
                name="google"
                placeholder="Google"
                value="{{ getSetting('google') }}"
            />
        </div>
        {{-- trojmiasto --}}
        <div class="mb-6">
            <label class="d-block mb-2" for="trojmiasto">Trojmiasto</label>
            <input
                class="form-control block w-full px-4 py-2 text-xl font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                type="text"
                id="trojmiasto"
                name="trojmiasto"
                placeholder="Trojmiasto"
                value="{{ getSetting('trojmiasto') }}"
            />
        </div>
        {{-- tel --}}
        <div class="mb-6">
            <label class="d-block mb-2" for="tel">Tel</label>
            <input
                class="form-control block w-full px-4 py-2 text-xl font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                type="text"
                id="tel"
                name="tel"
                placeholder="Tel"
                value="{{ getSetting('tel') }}"
            />
        </div>
        {{-- mail --}}
        <div class="mb-6">
            <label class="d-block mb-2" for="mail">Mail</label>
            <input
                class="form-control block w-full px-4 py-2 text-xl font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                type="text"
                id="mail"
                name="mail"
                placeholder="Mail"
                value="{{ getSetting('mail') }}"
            />
        </div>
        {{-- address --}}
        <div class="mb-6">
            <label class="d-block mb-2" for="address">Address</label>
            <input
                class="form-control block w-full px-4 py-2 text-xl font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                type="text"
                id="address"
                name="address"
                placeholder="Address"
                value="{{ getSetting('address') }}"
            />
        </div>
        {{-- customer_service --}}
        <div class="mb-6">
            <label class="d-block mb-2" for="customer_service">Customer Service</label>
            <input
                class="form-control block w-full px-4 py-2 text-xl font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                type="text"
                id="customer_service"
                name="customer_service"
                placeholder="Customer Service"
                value="{{ getSetting('customer_service') }}"
            />
        </div>
        {{-- google_map_embed_link --}}
        <div class="mb-6">
            <label class="d-block mb-2" for="google_map_embed_link">Google Map Embed Link</label>
            <input
                class="form-control block w-full px-4 py-2 text-xl font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                type="text"
                id="google_map_embed_link"
                name="google_map_embed_link"
                placeholder="Google Map Embed Link"
                value="{{ getSetting('google_map_embed_link') }}"
            />
        </div>

        <div class="text-center lg:text-left">
            <button
                type="submit"
                class="inline-block px-5 py-3 bg-green-600 text-white font-medium text-sm leading-snug uppercase rounded shadow-md hover:bg-green-700 hover:shadow-lg focus:bg-green-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-green-800 active:shadow-lg transition duration-150 ease-in-out"
            >
                Update
            </button>
        </div>
    </form>
@endsection
