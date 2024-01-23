@php
use App\Models\Company;
use App\Models\Ministry;
use App\Models\Association;
use App\Models\Personell;
@endphp

<body class="min-h-screen bg-gradient-to-b from-blue-900 to-red-700">

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 light:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-2 xl:grid-cols-2 gap-4 m-8">
        
    <a href="{{ route('companies.index') }}" :active="request()->routeIs('companies.index')" class="p-2">
    <div class="group bg-white hover: bg-blue-900 overflow-hidden shadow-xl sm:rounded-lg p-6 text-gray-900 light:text-gray-100 cursor-pointer transition-transform duration-300 ease-in-out transform hover:scale-105">
        <div class="flex items-center justify-between" @click="window.location.href='{{ route('companies.index') }}'">
            <div>
                <h3 class="text-2xl font-semibold">{{ __("Number of Companies") }}</h3>
                <span class="text-4xl font-bold">{{ Company::count() }}</span>
            </div>
            <img src="/images/companies.png" alt="Icon" class="ml-4" width="40" height="40">
        </div>
    </div>
    </a>


    <a href="{{ route('ministries.index') }}" :active="request()->routeIs('ministries.index')" class="p-2">
    <div class="group bg-white hover: bg-blue-900 overflow-hidden shadow-xl sm:rounded-lg p-6 text-gray-900 light:text-gray-100 cursor-pointer transition-transform duration-300 ease-in-out transform hover:scale-105">
        <div class="flex items-center justify-between" @click="window.location.href='{{ route('ministries.index') }}'">
            <div>
                <h3 class="text-2xl font-semibold">{{ __("Number of Ministry") }}</h3>
                <span class="text-4xl font-bold">{{ Ministry::count() }}</span>
            </div>
            <img src="/images/ministries.png" alt="Icon" class="ml-4" width="40" height="40">
        </div>
    </div>
    </a>

    <a href="{{ route('associations.index') }}" :active="request()->routeIs('associations.index')" class="p-2">
    <div class="group bg-white hover: bg-blue-900 overflow-hidden shadow-xl sm:rounded-lg p-6 text-gray-900 light:text-gray-100 cursor-pointer transition-transform duration-300 ease-in-out transform hover:scale-105">
        <div class="flex items-center justify-between" @click="window.location.href='{{ route('associations.index') }}'">
            <div>
                <h3 class="text-2xl font-semibold">{{ __("Number of Association") }}</h3>
                <span class="text-4xl font-bold">{{ Association::count() }}</span>
            </div>
            <img src="/images/associations.png" alt="Icon" class="ml-4" width="40" height="40">
        </div>
    </div>
    </a>

    <a href="{{ route('personells.index') }}" :active="request()->routeIs('personells.index')" class="p-2">
    <div class="group bg-white hover: bg-blue-900 overflow-hidden shadow-xl sm:rounded-lg p-6 text-gray-900 light:text-gray-100 cursor-pointer transition-transform duration-300 ease-in-out transform hover:scale-105">
        <div class="flex items-center justify-between" @click="window.location.href='{{ route('personells.index') }}'">
            <div>
                <h3 class="text-2xl font-semibold">{{ __("Number of Personnel") }}</h3>
                <span class="text-4xl font-bold">{{ Personell::count() }}</span>
            </div>
            <img src="/images/personnels.png" alt="Icon" class="ml-4" width="40" height="40">
        </div>
    </div>
    </a>

</x-app-layout>
