@extends('layouts.app')

@section('page_title','Edit | Cancel Meals')

@section('content')
    @if(session()->has('success'))
        <x-alert message="{{ session('success') }}"/>
    @endif
    <!-- component -->
    <div class="text-gray-900 ">
        <div class="p-4 flex">
            <h1 class="text-3xl my-6 ml-4">
                <span class=" font-bold ">{{ Auth::user()->first_name }} Current & Past Orders </span>
            </h1>
        </div>
        <div class="px-3 py-4 my-16 flex justify-center">
            <table class="w-full text-md bg-white shadow-md rounded mb-4">
                <tbody>
                <tr class="border-b">
                    <th class="text-left p-3 px-5">Meal Order</th>
                    <th class="text-left p-3 px-5">Category</th>
                    <th class="text-left p-3 px-5">Date Ordered</th>
                    <th></th>
                </tr>
                @forelse($choices as $choice)
                    <tr class="border-b hover:bg-orange-100 bg-gray-100">
                        <td class="p-3 px-5">{{ $choice['option']['option_nm'] }}</td>
                        <td class="p-3 px-5">{{ $choice['option']['category']['category_nm'] }}</td>
                        <td class="p-3 px-5"> {{ $choice['date'] }} </td>
                        <td class="p-3 px-5 flex justify-end">
                            @if($choice['date'] >= date('Y-m-d'))
                                <form action="{{ route('meal_choices.destroy', $choice['id']) }}" method="POST"
                                      name="form.{{ $choice['id'] }}">
                                    @method('DELETE')
                                    @csrf
                                    <button type="submit"
                                            class="text-sm bg-red-500 hover:bg-red-700 text-white py-1 px-2 rounded focus:outline-none focus:shadow-outline">
                                        Delete
                                    </button>
                                </form>
                            @endif
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="4" class="p-10 hover:bg-gray-200 text-center w-full px-5 col-span-3">
                            <h1 class="text-6xl text-gray-600 font-bold ">No Orders Made as of Yet</h1>
                        </td>
                    </tr>
                @endforelse
                </tbody>
            </table>
        </div>
    </div>
@endsection
