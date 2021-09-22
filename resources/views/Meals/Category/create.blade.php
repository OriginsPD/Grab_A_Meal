@extends('layouts.admin')

@section('admin_title','Create Meal Category')

@section('content')

    @if(session()->has('success'))
        <x-alert message="{{ session('success') }}"/>
    @endif
    <!-- component -->
    <div class="flex items-center mt-28 justify-center">
        <div class="w-full max-w-md">
            <form action="{{ route('meal_category.store') }}" method="POST"
                  class="bg-white shadow-lg rounded px-12 pt-6 pb-8 mb-4">
                @csrf
                <div
                    class="text-gray-800 text-2xl flex justify-center border-b-2 py-2 mb-4"
                >
                    Create Meal Category
                </div>
                <div class="mb-4">
                    <label
                        class="block text-gray-700 text-sm font-normal mb-2" for="Category">
                        Category Name:
                    </label>
                    <input
                        class="shadow appearance-none border  @error('category_nm') border-red-700 @enderror rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        name="category_nm" type="text" autofocus placeholder="Category"/>
                    <div class="text-sm my-2 text-red-700">
                        @error('category_nm')
                        * {{ $message }}
                        @enderror
                    </div>
                </div>
                <div class="flex items-center justify-between">
                    <button
                        class="px-4 py-2 rounded text-white inline-block shadow-lg bg-blue-500 hover:bg-blue-600 focus:bg-blue-700"
                        type="submit">Create
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection
