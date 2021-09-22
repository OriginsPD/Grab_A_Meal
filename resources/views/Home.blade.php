@extends('layouts.app')

@section('page_title','HomePage | Hero')

@section('content')
    <div class="flex bg-gray-100 mt-4" style="height:600px;">
        <div class="flex items-center text-center lg:text-left px-8 md:px-12 lg:w-1/2">
            <div>
                <h2 class="text-3xl font-semibold text-gray-800 md:text-4xl">GRAB A <span
                        class="text-indigo-600">MEAL</span></h2>
                <p class="mt-2 text-sm text-gray-500 md:text-base">Lorem ipsum dolor sit amet, consectetur adipisicing
                    elit. Blanditiis commodi cum cupiditate ducimus, fugit harum id necessitatibus odio quam quasi,
                    quibusdam rem tempora voluptates. Cumque debitis dignissimos id quam vel!</p>
            </div>
        </div>
        <div class="hidden h-full lg:block lg:w-1/2" style="clip-path:polygon(10% 0, 100% 0%, 100% 100%, 0 100%)">
            <div class="h-full object-cover"
                 style="background-image: url(https://source.unsplash.com/random);background-size: cover; background-repeat: no-repeat">
                <div class="h-full bg-black opacity-25"></div>
            </div>
        </div>
    </div>
@endsection
