@extends('layouts.app')

@section('page_title', 'Registration')

@section('content')


    <div class="flex bg-white mt-4" style="height:600px;">
        <div class="flex items-center text-center lg:text-left px-8 md:px-12 lg:w-1/2">
            <div>
                <h2 class="text-3xl font-semibold text-gray-800 md:text-4xl">Hungry <span class="text-indigo-600">Sign Up</span>
                </h2>
                <p class="mt-2 text-sm text-gray-500 md:text-base">Lorem ipsum dolor sit amet, consectetur adipisicing
                    elit. Blanditiis commodi cum cupiditate ducimus, fugit harum id necessitatibus odio quam quasi,
                    quibusdam rem tempora voluptates. Cumque debitis dignissimos id quam vel!</p>

            </div>
        </div>
        <div class="hidden h-full lg:block lg:w-1/2" style="clip-path:polygon(10% 0, 100% 0%, 100% 100%, 0 100%);background-image: url(https://source.unsplash.com/random);background-size: cover; background-repeat: no-repeat"">
            <div class="md:w-1/2 max-w-lg mx-auto border border-gray-500 bg-white my-2 px-4 py-5 shadow-xl">
                <div class="text-left p-0 font-sans">
                    <h1 class=" text-gray-800 text-3xl pt-8 -mt-6 w-full text-center font-medium">Create an Account </h1>
                </div>
                <form action="{{ route('register.store') }}" method="POST" class="p-0">
                    @csrf
                    <div class="mt-5">
                        <!-- <label for="email" class="sc-bqyKva ePvcBv">Email</label> -->
                        <input type="text"
                               class="block w-full p-2 border rounded border-gray-300 focus:outline-none focus:ring-1 focus:ring-gray-400 focus:border-transparent @error('email') border-red-700 @enderror "
                               name="email" placeholder="Email">
                        <div class="text-red-700 text-sm">
                            @error('email')
                            * {{ $message }}
                            @enderror
                        </div>
                    </div>
                    <div class="mt-5">
                        <input type="text"
                               class="block w-full p-2 border rounded border-gray-300 focus:outline-none focus:ring-1 focus:ring-gray-400 focus:border-transparent @error('first_name') border-red-700 @enderror "
                               name="first_name" placeholder="First name">
                        <div class="text-red-700 text-sm">
                            @error('first_name')
                            * {{ $message }}
                            @enderror
                        </div>
                    </div>
                    <div class="mt-5">
                        <input type="text"
                               class="block w-full p-2 border rounded border-gray-300 focus:outline-none focus:ring-1 focus:ring-gray-400 focus:border-transparent @error('last_name') border-red-700 @enderror "
                               name="last_name" placeholder="Last Name">
                        <div class="text-red-700 text-sm">
                            @error('last_name')
                            * {{ $message }}
                            @enderror
                        </div>
                    </div>
                    <div class="mt-5">
                        <input type="password"
                               class="block w-full p-2 border rounded border-gray-300 focus:outline-none focus:ring-1 focus:ring-gray-400 focus:border-transparent @error('password') border-red-700 @enderror "
                               name="password" placeholder="Password" autocomplete="off">
                        <div class="text-red-700 text-sm">
                            @error('password')
                            * {{ $message }}
                            @enderror
                        </div>
                    </div>
                    <div class="mt-5">
                        <input type="password"
                               class="block w-full p-2 border rounded border-gray-300 focus:outline-none focus:ring-1 focus:ring-gray-400 focus:border-transparent @error('password_confirmation') border-red-700 @enderror"
                               name="password_confirmation" placeholder="Password Confirmation" autocomplete="off">
                        <div class="text-red-700 text-sm">
                            @error('password_confirmation')
                            * {{ $message }}
                            @enderror
                        </div>
                    </div>
                    <div class="mt-10">
                        <input type="submit" value="Sign up"
                               class="py-3 -mt-6 bg-green-500 text-white w-full rounded hover:bg-green-600">
                    </div>
                </form>
                <a class="" href="{{ route('login.index') }}" data-test="Link"><span
                        class="block  p-3 text-center text-gray-800  text-xs ">Already have an account?</span></a>
            </div>
        </div>
    </div>
@endsection
