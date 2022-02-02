@extends('layouts.app')

@section('content')
    <div class="m-auto w-4/5 py-24">
        <div class="text-center">
            <h1 class="text-5xl uppercase bold text-blue-400">
                {{ $car->name }}
            </h1>
        </div>

        <div class="py-10 text-center">
                <div class="m-auto">
                    <span class="uppercase text-blue-500 font-bold text-xs italic">Founded: {{ $car->founded }}</span>

                    <p class="text-lg text-gray-700 py-6">
                        {{ $car->desciption }}
                    </p>

                    <ul>
                        <p class="text-lg text-gray-700 py-3">
                            Models:
                        </p>

                        @forelse ($car->carModels as $model)
                            <li class="inline italic text-gray-600 px-1 py-6">
                                {{ $model['model_name'] }}
                            </li>
                        @empty
                            <p>
                                No models found
                            </p>
                        @endforelse
                    </ul>

                    <hr class="mt-4 mb-8"/>
                </div>
        </div>
    </div>
@endsection