<aside x-data="{ open: false }"class="flex flex-col w-60 min-w-60 max-w-60 min-h-full px-5 py-8 overflow-y-auto bg-white border-r-2 rtl:border-r-0 rtl:border-l dark:bg-gray-900 dark:border-gray-700">
    <!-- Logo -->
    <div class="shrink-0 flex items-center p-4">
        <a href="{{ route('dashboard') }}" class="text-lg font-bold text-blue-900 light:text-blue-900">
            {{ __('Centralised Robotics Platform') }}
        </a>
    </div>

    <!-- Navigation Links -->
    <div class="text-sm font-medium">
        <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')" class="p-2">
            {{ __('Dashboard') }}
        </x-nav-link><br><br>
        <label class="text-xs text-gray-500 uppercase dark:text-gray-400">REPORTING&MANAGING</label>
        <br>
        <x-nav-link :href="route('companies.index')" :active="request()->routeIs('companies.index')" class="p-2">
            {{ __('Manage Companies') }}
        </x-nav-link><br>
        <x-nav-link :href="route('associations.index')" :active="request()->routeIs('associations.index')" class="p-2">
            {{ __('Manage Associations') }}
        </x-nav-link><br>
        <x-nav-link :href="route('ministries.index')" :active="request()->routeIs('ministries.index')" class="p-2">
            {{ __('Manage Ministries') }}
        </x-nav-link><br>
        <x-nav-link :href="route('personells.index')" :active="request()->routeIs('personells.index')" class="p-2">
            {{ __('Manage Personnel') }}
        </x-nav-link><br><br>
    <label class="text-xs font-medium text-gray-500 uppercase dark:text-gray-400">DATA REGISTRATION</label>

        <x-nav-link :href="route('personells.create')" :active="request()->routeIs('personells.create')" class="p-2">
            {{ __('Register Business Card') }}
        </x-nav-link><br>
            <x-nav-link :href="route('companies.create')" :active="request()->routeIs('companies.create')" class="p-2">
                {{ __('Register Company') }}
            </x-nav-link><br>
            <x-nav-link :href="route('associations.create')" :active="request()->routeIs('associations.create')" class="p-2">
                {{ __('Register Association') }}
            </x-nav-link><br>
            <x-nav-link :href="route('ministries.create')" :active="request()->routeIs('ministries.create')" class="p-2">
                {{ __('Register Ministry') }}
            </x-nav-link><br>

    </div>
    <br><br>
        <label class="text-xs font-medium text-gray-500 uppercase dark:text-gray-400">PROFILE</label>
    <!-- User Settings Dropdown -->
    <div class="flex max-w-full">

            <x-nav-link :href="route('profile.edit')" class="block p-2">
                {{Auth::user()->name}}
            </x-nav-link>

            <!-- Authentication -->
            <form method="POST" action="{{ route('logout') }}">
                @csrf

                <x-nav-link :href="route('logout')" onclick="event.preventDefault(); this.closest('form').submit();" class="size-auto">
                <img src="{{url('/images/logouticon.png')}}" width="20" height ="20" alt="LogOut" />
                </x-nav-link>
            </form>
    </div>
</aside>