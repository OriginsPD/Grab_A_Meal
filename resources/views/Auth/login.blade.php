@extends('layouts.app')

@section('page_title','Login')

@section('content')
    <div class="flex bg-white mt-4" style="height:600px;">
        <div class="flex items-center text-center lg:text-left px-8 md:px-12 lg:w-1/2">
            <div>
                <h2 class="text-3xl font-semibold text-gray-800 md:text-4xl">Join The <span
                        class="text-indigo-600">LINE</span></h2>
                <p class="mt-2 text-sm text-gray-500 md:text-base">Lorem ipsum dolor sit amet, consectetur adipisicing
                    elit. Blanditiis commodi cum cupiditate ducimus, fugit harum id necessitatibus odio quam quasi,
                    quibusdam rem tempora voluptates. Cumque debitis dignissimos id quam vel!</p>

            </div>
        </div>
        <div class="hidden h-full lg:block border-2 bg-gray-300 lg:w-1/2" style="clip-path:polygon(10% 0, 100% 0%, 100% 100%, 0 100%);background-image: url(https://source.unsplash.com/random);background-size: cover; background-repeat: no-repeat"">
            <div class="md:w-1/2 max-w-lg mx-auto my-24 border border-gray-500 rounded-xl bg-white px-4 py-5 shadow-xl">
                <div class="text-left p-0 font-sans">
                    <h1 class=" text-gray-800 text-3xl pt-8 -mt-6 w-full text-center font-medium">Login </h1>
                </div>
                <form action="{{ route('login.store') }}" method="POST" class="p-0">
                    @csrf
                    <div class="mt-5">
                        <input type="email"
                               class="block w-full p-2 border rounded border-gray-300 focus:outline-none focus:ring-1 focus:ring-gray-400 focus:border-transparent @error('email') border-red-700 @enderror "
                               name="email" placeholder="Username">
                        <div class="text-red-700 text-sm">
                            @error('email')
                            * {{ $message }}
                            @enderror
                        </div>
                    </div>
                    <div class="mt-5">
                        <input type="password"
                               class="block w-full p-2 border rounded border-gray-300 focus:outline-none focus:ring-1 focus:ring-gray-400 focus:border-transparent @error('password') border-red-700 @enderror "
                               name="password" placeholder="password" autocomplete="off">
                        <div class="text-red-700 text-sm">
                            @error('password')
                            * {{ $message }}
                            @enderror
                        </div>
                    </div>
                    <div>
                        <button type="submit"
                            class="mt-4 mb-3 w-full bg-green-500 hover:bg-green-400 text-white py-2 rounded-md transition duration-100">
                            Login now
                        </button>

                </form>
            </div>
            <p class="mt-4 w-full text-center"> Dont have an account? <span class="cursor-pointer text-sm text-blue-600"><a
                        href="{{ route('register.index') }}"> Join today </a></span></p>
        </div>
    </div>
@endsection

