@extends('layouts.app')


@section('content')
    <div class="m-auto w-4/8 py-24">
        <div class="text-center">
            <h1 class="text-5xl uppercase bold text-blue-500">
                Create car
            </h1>
        </div>
    </div>

    <div class="flex justify-center pt-20">
        <form action="/cars" method="POST">
            @csrf
            <div class="block">
                <input type="text" name="name" placeholder="Brand name..." class="block shadow-5xl mb-10 p-2 w-80 italic placeholder-gray-400">
            
                <input type="text" name="founded" placeholder="founded..." class="block shadow-5xl mb-10 p-2 w-80 italic placeholder-gray-400">
            
                <input type="text" name="description" placeholder="description..." class="block shadow-5xl mb-10 p-2 w-80 italic placeholder-gray-400">
                
                <button type="submit" class="bg-green-500 block shadow-5xl mb-10 p-2 w-80 uppercase font-bold">
                    Submit
                </button>
            </div>
        </form>
    </div>
@endsection