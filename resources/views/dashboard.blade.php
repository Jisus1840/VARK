@extends('layouts.base_html')
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    You're logged in!
                </div>
            </div>
        </div>
    </div>

    <div class="row my-5">
        <div class="col-12 col-md-6">
            {{-- Chart 1 VARK --}}
            <div style="width: 30rem; height: 30rem">
                <h3 class="text-center fs-4">VARK por persona</h3>
                <canvas id="vark" style="width: inherit; height: inherit;"></canvas>
            </div>
        </div>

        <div class="col-12 col-md-6">
            {{-- Chart 2 Personalidad --}}
            <div style="width: 30rem; height: 30rem">
                <h3 class="text-center fs-4">Personalidad por persona</h3>
                <canvas id="personalidad" style="width: inherit; height: inherit;"></canvas>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12 col-md-6">
            {{-- Chart 3 --}}
            <div style="width: 30rem; height: 30rem">
                <h3 class="text-center fs-4">Registros totales</h3>
                <canvas id="total" style="width: inherit; height: inherit;"></canvas>
            </div>
        </div>
    </div>
</x-app-layout>

@push('scripts')
    <script src="{{ @asset('js/dashboard.js') }}"></script>
@endpush
