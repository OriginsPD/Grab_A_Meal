@extends('layouts.admin')

@section('admin_title','Create Meal Options')

@section('content')
    @if(session()->has('success'))
        <x-alert message="{{ session()->get('success') }}" />
    @endif
    <div class="flex items-center mt-28 justify-center">
        <div class="w-full max-w-md">
            <form action="{{ route('meal_option.store') }}" method="POST" class="bg-white shadow-lg rounded px-12 pt-6 pb-8 mb-4">
                @csrf
                <div
                    class="text-gray-800 text-2xl flex justify-center border-b-2 py-2 mb-4"
                >
                    Create Meal Option
                </div>
                <div class="mb-4">
                    <label
                        class="block text-gray-700 text-sm font-normal mb-2" for="Category">
                        Meal Option Name:
                    </label>
                    <input
                        class="shadow appearance-none border  @error('option_nm') border-red-700 @enderror rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        name="option_nm" type="text" autofocus placeholder="Options"/>
                    <div class="text-sm my-2 text-red-700">
                        @error('option_nm')
                        * {{ $message }}
                        @enderror
                    </div>
                </div>
                <div class="mb-4">
                <div class="inline-block relative w-64">
                    <select name="category_id" class="block appearance-none w-full bg-white border border-gray-400 hover:border-gray-500 px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:shadow-outline">
                        <option selected > Please Select Category </option>
                        @forelse($categories as $category)
                            <option value="{{ $category['id'] }}">{{ $category['category_nm'] }}</option>
                        @empty
                            <option selected disabled> No Categories Added  </option>
                        @endforelse
                    </select>
                    <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                        <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                    </div>
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
