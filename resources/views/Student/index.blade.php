@extends('layouts.app')

@section('page_title', 'Student | '.Auth::user()->first_name)

@section('content')
    <!-- component -->
    <section class="text-gray-600 body-font">
        <div class="container px-5 py-24 mx-auto max-w-7x1">
            <div class="flex flex-wrap w-full mb-4 p-4">
                <div class="w-full mb-6 lg:mb-0">
                    <h1 class="sm:text-4xl text-5xl font-medium font-bold title-font mb-2 text-gray-900">This Week Lunch Options</h1>
                    <div class="h-1 w-20 bg-indigo-500 rounded"></div>
                </div>
            </div>
            <div class="flex flex-wrap -m-4">
                @forelse($options as $option)
                <button class="xl:w-1/3 md:w-1/2 p-4">
                    <div class="bg-white shadow-2xl p-6 rounded-lg">
                        <img class="lg:h-60 xl:h-56 md:h-64 sm:h-72 xs:h-72 h-72  rounded w-full object-cover object-center mb-6" src="https://images.everydayhealth.com/images/diet-nutrition/6-new-healthy-eating-rules-without-the-food-pyramid-722x406.jpg" alt="Image Size 720x400">
                        <h3 class="tracking-widest text-green-500 text-xl font-bold title-font">{{ $option['category']['category_nm'] }}</h3>
                        <h2 class="text-lg text-gray-900 font-medium title-font mb-4">{{ $option['option_nm'] }}</h2>
                    </div>
                </button>
                @empty
                    <div class="">
                        <h1 class="lg:text-5xl  font-bold leading-tight text-3xl">No Meals Have Been Added Yet</h1>
                        <p class="mt-4 text-lg font-normal ">Please Wait For Admin Update <br> Thank You For Yor Patience.</p>
                    </div>
                @endforelse
            </div>
        </div>
    </section>
@endsection
