@extends('admin::layouts.guest')

@section('title')
    Reset Password
@endsection

@section('content')
    <form action="{{ route('admin.password.update') }}" method="POST">
        @csrf
        <input type="hidden" name="token" value="{{ $token }}">
        {{-- Email input --}}
        <div class="mb-6">
            <label for="email">Email</label>
            <input
                class="form-control block w-full px-4 py-2 text-xl font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                type="text"
                id="email"
                name="email"
                placeholder="Email address"
                value="{{ $email ?? old('email') }}"
            />
            @error('email')
                <span class="text-red-500">{{ $message }}</span>
            @enderror
        </div>

        <div class="mb-6">
            <label for="password">Password</label>
            <input
                class="form-control block w-full px-4 py-2 text-xl font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                type="password"
                id="password"
                name="password"
                placeholder="Password"
            />
            @error('password')
                <span class="text-red-500">{{ $message }}</span>
            @enderror
        </div>

        <div class="mb-6">
            <label for="password_confirmation">Confirm Password</label>
            <input
                class="form-control block w-full px-4 py-2 text-xl font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                type="password"
                id="password_confirmation"
                name="password_confirmation"
                placeholder="Confirm Password"
            />
            @error('password_confirmation')
                <span class="text-red-500">{{ $message }}</span>
            @enderror
        </div>

        <div class="text-center lg:text-left">
            <button
                type="submit"
                class="inline-block px-7 py-3 bg-blue-600 text-white font-medium text-sm leading-snug uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out"
            >
                Reset Password
            </button>
        </div>
    </form>
@endsection
