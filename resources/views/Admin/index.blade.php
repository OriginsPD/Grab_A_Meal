@extends('layouts.admin')

@section('admin_title', 'Admin Homepage')

@section('content')
    <main class="my-8">
        <div class="container mx-auto px-6">
            <a href="{{ route('meal_choices.index') }}"> <div class="h-64 rounded-md shadow-xl overflow-hidden bg-cover bg-center" style="background-image: url('https://cdn.pixabay.com/photo/2017/10/09/19/29/eat-2834549_960_720.jpg')">
                <div class="bg-gray-900 bg-opacity-80 flex items-center h-full">
                    <div class="px-10 max-w-xl">
                        <h2 class="text-2xl text-white uppercase font-semibold">Current Orders</h2>
                        <p class="mt-2 text-gray-200">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tempore facere provident molestias ipsam sint voluptatum pariatur.</p>
                    </div>
                </div>
            </div></a>
            <div class="md:flex mt-8 md:-mx-4">
                <div class="w-full shadow-xl h-64 md:mx-4 rounded-md overflow-hidden bg-cover bg-center md:w-1/2" style="background-image: url('https://cdn.pixabay.com/photo/2015/03/26/09/42/breakfast-690128_960_720.jpg')">
                    <a href="{{ route('meal_option.create') }}"> <div class="bg-gray-900 bg-opacity-80 flex items-center h-full">
                        <div class="px-10 max-w-xl">
                            <h2 class="text-2xl text-white uppercase font-semibold">Add Meal Options</h2>
                            <p class="mt-2 text-gray-200">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tempore facere provident molestias ipsam sint voluptatum pariatur.</p>
                        </div>
                    </div></a>
                </div>
                <div class="w-full h-64 md:mx-4 rounded-md shadow-xl overflow-hidden bg-cover bg-center md:w-1/2" style="background-image: url('https://cdn.pixabay.com/photo/2017/09/16/19/21/salad-2756467_960_720.jpg')">
                    <a href="{{ route('meal_category.create') }}"> <div class="bg-gray-900 bg-opacity-80 flex items-center h-full">
                        <div class="px-10 max-w-xl">
                            <h2 class="text-2xl text-white uppercase font-semibold">Add Meal Category</h2>
                            <p class="mt-2 text-gray-200">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tempore facere provident molestias ipsam sint voluptatum pariatur.</p>
                        </div>
                    </div></a>
                </div>
            </div>
            </div>
    </main>

@endsection
