<aside x-data="{ open: false }"class="flex flex-col w-64 h-screen px-5 py-8 overflow-y-auto bg-white border-r rtl:border-r-0 rtl:border-l dark:bg-gray-900 dark:border-gray-700">
    <!-- Logo -->
    <div class="shrink-0 flex items-center p-4">
        <a href="{{ route('dashboard') }}" class="text-lg font-bold text-blue-900 light:text-blue-900">
            {{ __('Centralised Robotics Platform') }}
        </a>
    </div>

    <!-- Navigation Links -->
    <div class="text-sm font-medium">
        <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')" class="p-4">
            {{ __('Dashboard') }}
        </x-nav-link><br>
        <label class="text-xs text-gray-500 uppercase dark:text-gray-400">REPORTING & MANAGING</label>
        <br>
        <x-nav-link :href="route('companies.index')" :active="request()->routeIs('companies.index')" class="p-4">
            {{ __('Manage Companies') }}
        </x-nav-link><br>
        <x-nav-link :href="route('associations.index')" :active="request()->routeIs('associations.index')" class="p-4">
            {{ __('Manage Associations') }}
        </x-nav-link><br>
        <x-nav-link :href="route('ministries.index')" :active="request()->routeIs('ministries.index')" class="p-4">
            {{ __('Manage Ministries') }}
        </x-nav-link><br>
        <x-nav-link :href="route('personells.index')" :active="request()->routeIs('personells.index')" class="p-4">
            {{ __('Manage Personnel') }}
        </x-nav-link><br>
        
    <br>
    <label class="text-xs font-medium text-gray-500 uppercase dark:text-gray-400">DATA REGISTRATION</label>

        <x-nav-link :href="route('personells.create')" :active="request()->routeIs('personells.create')" class="p-4">
            {{ __('Register Business Card') }}
        </x-nav-link><br>
    </div>
    <!-- Register Organization Dropdown -->
    <div class="p-4">
        <button @click="open = ! open" class="inline-flex items-center px-3 py-2 text-sm leading-4 font-medium rounded-md text-blue-900 light:text-blue-900 bg-transparent light:bg-blue-800 hover:text-red-700 light:hover:text-red-1000 focus:outline-none transition ease-in-out duration-150">
            <div>{{ __('Register Organization ') }}</div>

            <div class="ml-1">
                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                </svg>
            </div>
        </button>

        <div x-show="open" class="mt-2 space-y-2">
            <x-dropdown-link :href="route('companies.create')" class="block p-2">
                {{ __('Company') }}
            </x-dropdown-link>
            <x-dropdown-link :href="route('associations.create')" class="block p-2">
                {{ __('Association') }}
            </x-dropdown-link>
            <x-dropdown-link :href="route('ministries.create')" class="block p-2">
                {{ __('Ministry') }}
            </x-dropdown-link>
        </div>
    </div>

    <!-- User Settings Dropdown -->
    <div class="p-4">
        <button @click="open = ! open" class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-blue-900 light:text-blue-900 bg-transparent light:bg-blue-800 hover:text-red-700 light:hover:text-red-1000 focus:outline-none transition ease-in-out duration-150">
            <div>{{ Auth::user()->name }}</div>

            <div class="ml-1">
                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                </svg>
            </div>
        </button>

        <div x-show="open" class="mt-2 space-y-2">
            <x-dropdown-link :href="route('profile.edit')" class="block p-2">
                {{ __('Profile') }}
            </x-dropdown-link>

            <!-- Authentication -->
            <form method="POST" action="{{ route('logout') }}">
                @csrf

                <x-dropdown-link :href="route('logout')" onclick="event.preventDefault(); this.closest('form').submit();" class="block p-2">
                    {{ __('Log Out') }}
                </x-dropdown-link>
            </form>
        </div>
    </div>
</aside>