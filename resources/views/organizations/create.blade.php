
<x-app-layout>
        
<div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-2 xl:grid-cols-3 gap-4 m-8">
        
    <a href="{{ route('companies.create') }}" :active="request()->routeIs('companies.create')" class="p-2">
    <div class="group bg-white hover: bg-blue-900 overflow-hidden shadow-xl sm:rounded-lg p-6 text-gray-900 light:text-gray-100 cursor-pointer transition-transform duration-300 ease-in-out transform hover:scale-105">
        <div class="flex items-center justify-between" @click="window.location.href='{{ route('companies.create') }}'">
            <div>
                <h3 class="text-2xl font-semibold">{{ __("Create a Company Records") }}</h3>
                <span class="text-4xl font-bold"></span>
            </div>
            <img src="/images/companies.png" alt="Icon" class="ml-4" width="40" height="40">
        </div>
    </div>
    </a>


    <a href="{{ route('ministries.create') }}" :active="request()->routeIs('ministries.create')" class="p-2">
    <div class="group bg-white hover: bg-blue-900 overflow-hidden shadow-xl sm:rounded-lg p-6 text-gray-900 light:text-gray-100 cursor-pointer transition-transform duration-300 ease-in-out transform hover:scale-105">
        <div class="flex items-center justify-between" @click="window.location.href='{{ route('ministries.create') }}'">
            <div>
                <h3 class="text-2xl font-semibold">{{ __("Create a Ministry Records") }}</h3>
                <span class="text-4xl font-bold"></span>
            </div>
            <img src="/images/ministries.png" alt="Icon" class="ml-4" width="40" height="40">
        </div>
    </div>
    </a>

    <a href="{{ route('associations.create') }}" :active="request()->routeIs('associations.create')" class="p-2">
    <div class="group bg-white hover: bg-blue-900 overflow-hidden shadow-xl sm:rounded-lg p-6 text-gray-900 light:text-gray-100 cursor-pointer transition-transform duration-300 ease-in-out transform hover:scale-105">
        <div class="flex items-center justify-between" @click="window.location.href='{{ route('associations.create') }}'">
            <div>
                <h3 class="text-2xl font-semibold">{{ __("Create an Association Records") }}</h3>
                <span class="text-4xl font-bold"></span>
            </div>
            <img src="/images/associations.png" alt="Icon" class="ml-4" width="40" height="40">
        </div>
    </div>
    </a>

</div>
</x-app-layout>