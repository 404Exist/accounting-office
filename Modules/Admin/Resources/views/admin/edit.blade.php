@extends('admin::layouts.auth')

@section('title')
Edit Account
@endsection

@section('content')
    <form action="{{ route('admin.profile.update') }}" method="POST" class="mb-10">
        @csrf
        @method('PATCH')
        @if (session()->has('success'))
        <div class="flex items-center bg-green-500 text-sm font-bold px-4 py-3 mb-6 rounded" role="alert">
            <p class="text-white ">{{ session()->get('success') }}</p>
        </div>
        @endif
        {{-- Email --}}
        <div class="mb-6">
            <label class="d-block mb-2" for="email">Email</label>
            <input
                class="form-control block w-full px-4 py-2 text-xl font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                type="email"
                id="email"
                name="email"
                placeholder="Email"
                value="{{ admin()->email }}"
            />
        </div>
        {{-- Password --}}
        <div class="mb-6">
            <label class="d-block mb-2" for="password">Password</label>
            <input
                class="form-control block w-full px-4 py-2 text-xl font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                type="password"
                id="password"
                name="password"
                placeholder="Password"
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
