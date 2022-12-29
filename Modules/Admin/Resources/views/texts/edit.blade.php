@extends('admin::layouts.auth')

@section('title')
Edit Text
@endsection

@section('content')
{{-- editor_en --}}
    <form action="{{ route('admin.texts.update', $text->id) }}" method="POST" class="mb-10">
        @csrf
        @method('PATCH')
        @if (session()->has('success'))
        <div class="flex items-center bg-green-500 text-sm font-bold px-4 py-3 mb-6 rounded" role="alert">
            <p class="text-white ">{{ session()->get('success') }}</p>
        </div>
        @endif
        {{-- session errors --}}
        {{-- Pl Text --}}
        <div class="mb-6">
            <label class="d-block mb-2" for="editor_pl">Pl Text</label>
            <textarea id="editor_pl" name="pl_text">{{ $text->value['pl'] }}</textarea>
            @error('pl_text')
            <p class="text-white bg-red-800 px-3 py-2 mt-2 rounded">{{ $message }}</p>
            @enderror
        </div>
        {{-- Pl Text --}}
        <div class="mb-6">
            <label class="d-block mb-2" for="editor_en">En Text</label>
            <textarea id="editor_en" name="en_text">{{ $text->value['en'] }}</textarea>
            @error('en_text')
            <p class="text-white bg-red-800 px-3 py-2 mt-2 rounded">{{ $message }}</p>
            @enderror
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
