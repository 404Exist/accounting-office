@extends('admin::layouts.guest')

@section('title')
    Login
@endsection

@section('content')
    <form action="{{ route('admin.login') }}" method="POST">
        @csrf
        {{-- Email input --}}
        <div class="mb-6">
            <label for="email">Email</label>
            <input
                class="form-control block w-full px-4 py-2 text-xl font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                type="text"
                id="email"
                name="email"
                placeholder="Email address"
                value="{{ old('email') }}"
            />
            @error('email')
                <span class="text-red-500">{{ $message }}</span>
            @enderror
        </div>

        {{-- Password input --}}
        <div class="mb-6">
            <label for="password">Password</label>
            <input
                class="form-control block w-full px-4 py-2 text-xl font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                type="password"
                id="password"
                name="password"
                placeholder="Password"
            />
        </div>

        <div class="flex justify-between items-center mb-6">
            <div class="form-group form-check">
                <input
                    class="form-check-input h-4 w-4 border border-gray-300 rounded-sm bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer"
                    type="checkbox"
                    id="remember"
                    name="remember"
                />
                <label class="form-check-label inline-block text-gray-800" for="remember">Remember me</label>
            </div>
            <a href="{{ route('admin.password.request') }}" class="text-gray-800">Forgot password?</a>
        </div>

        <div class="text-center lg:text-left">
            <button
                type="submit"
                class="inline-block px-7 py-3 bg-blue-600 text-white font-medium text-sm leading-snug uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out"
            >
                Login
            </button>
        </div>
    </form>
@endsection
