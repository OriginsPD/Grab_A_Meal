@extends('layouts.app')

@section('page_title','Order | Grab a Plate ')

@section('content')
    @if(session()->has('success'))
        <x-alert message="{{ session('success') }}"/>
    @endif
    <!-- component -->
    <div class="flex items-center mt-24 justify-center">
    <div class="leading-loose mx-auto">
        <form action="{{ route('meal_choices.store') }}" method="POST" class="max-w-xl w-full m-4 p-10 bg-white rounded shadow-xl">
            @csrf
            <p class="text-gray-800 text-xl w-full my-4 font-medium">Meal Order information</p>
            <div class="">
                <label class="block text-sm text-gray-500 my-2" for="user_id">Student Name</label>
                <input class="w-full placeholder-gray-900 @error('user_id') border-red-700 @enderror px-5 py-1 text-gray-700 bg-gray-200 rounded" id="user_id" type="text"  placeholder="{{ Auth()->user()->first_name." ".Auth()->user()->last_name   }}">
                <input type="hidden" name="user_id" value="{{ Auth()->user()->id }}">
                <div class="text-sm my-2 text-red-700">
                    @error('user_id')
                    * {{ $message }}
                    @enderror
                </div>
            </div>
            <div class="mt-4">

            <div class="inline-block relative w-full">
                <label for="" class="block text-sm text-gray-500 my-2">Please Select Option (Hold Ctrl to Multi select)</label>
                <select multiple name="option_id[]" class="block appearance-none w-full bg-white border border-gray-400 hover:border-gray-500 px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:shadow-outline">
                    @forelse($options as $option)
                        <option value="{{ $option['id'] }}">{{ $option['option_nm'] }}</option>
                    @empty
                        <option selected disabled> No Meal Option Added  </option>
                    @endforelse
                </select>
                <div class="text-sm my-2 text-red-700">
                    @error('option_id')
                    * {{ $message }}
                    @enderror
                </div>
            </div>
            </div>

            <div class="mt-4">
                <button class="px-4 py-1 text-white font-light tracking-wider bg-gray-900 rounded" type="submit">Order Now</button>
            </div>
        </form>
    </div>
    </div>
@endsection
