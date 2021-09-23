@extends('layouts.admin')

@section('admin_title','Current Orders')

@section('content')
<div class="my-8 ml-4">
    <h2 class="text-2xl font-bold leading-7 text-gray-900 sm:text-3xl sm:truncate">
        Current Students Orders
    </h2>
</div>
<!-- component -->
<section class="container mx-auto p-6 font-serif">
    <div class="w-full mb-8 overflow-hidden rounded-lg shadow-lg">
        <div class="w-full">
            <table class="w-full">
                <thead>
                    <tr
                        class="text-md font-semibold tracking-wide text-left text-gray-900 bg-gray-100 uppercase border-b border-gray-600">
                        <th class="px-4 border-2 border py-3">Name</th>
                        <th class="px-4 border-2 border py-3">Meal Option</th>
                        <th class="px-4 border-2 border py-3">Meal Category</th>
                        <th class="px-4 border-2 border py-3">Date Ordered</th>
                    </tr>
                </thead>
                <tbody class="bg-white">

                    @forelse($choices as $choice)
                    <tr class="text-gray-700 ">
                        <td class="px-4 py-3 border">
                            <div class="flex items-center text-sm">
                                <div>
                                    <p class="font-semibold text-black">{{ $choice['users']['first_name'] }}</p>
                                    <p class="text-xs text-gray-600">{{ $choice['users']['email'] }}</p>
                                </div>
                            </div>
                        </td>
                        <td class="px-4 py-3 text-ms font-semibold border">{{ $choice['option']['option_nm'] }}</td>
                        <td class="px-4 py-3 text-ms font-semibold border">{{ $choice['option']['category']['category_nm'] }}</td>
                        <td class="px-4 py-3 text-sm border">{{ $choice['date'] }}</td>
                    </tr>

                    @empty
                    <td colspan="4" class="px-4 w-full text-center uppercase text-xl py-3 text-ms font-semibold border">
                        No Student As Ordered Yet </td>
                    @endforelse

                </tbody>
            </table>
        </div>
    </div>
</section>



@endsection
