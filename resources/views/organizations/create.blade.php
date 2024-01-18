
<x-app-layout>


<h1> Create ORGANIZATION of </h1>
<div >
<x-nav-link :href="route('ministries.create')">
                        {{ __('Ministry') }}
        </x-nav-link>
        <x-nav-link :href="route('companies.create')">
                        {{ __('Company') }}
        </x-nav-link>
        <x-nav-link :href="route('associations.create')">
                        {{ __('Association') }}
        </x-nav-link>
</div>

</x-app-layout>