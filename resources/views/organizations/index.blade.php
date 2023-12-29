<x-app-layout>
<x-responsive-nav-link :href="route('providers.create')" :active="request()->routeIs('providers.create')"> NEW </x-responsive-nav-link>
        <div class= 'text-gray-300' >
            Note Self: Subquery can be used for user search interface later
        <table class= 'table-fixed bg-white dark:bg-gray-800'>
  <tr>
    <th>providerName</th>
    <th>providerEmail</th>															
    <th>providerPhoneNo</th>
    <th>registerNo</th>
    <th>providerDescription</th>
    <th>providerWare</th>
    <th>providerSpecialization</th>
    <th>providerCategory</th>
    <th>providerURL</th>
    <th>providerRobotType</th>
    <th>providerAddress</th>
    <th>providerCity</th>
    <th>providerState</th>
    <th>providerPostcode</th>
    <th>providerCountry</th>
  </tr>
  @foreach ($providers as $provider)
    <tr>
            <td><a href="{{ route('providers.show', ['provider' => $provider['id']])}}">{{$provider['providerName']}}</a></td>
            <td><a href="{{ route('providers.show', ['provider' => $provider['id']])}}">{{$provider['providerEmail']}}</a></td>   
            <td><a href="{{ route('providers.show', ['provider' => $provider['id']])}}">{{$provider['providerPhoneNo']}}</a></td>   
            <td><a href="{{ route('providers.show', ['provider' => $provider['id']])}}">{{$provider['registerNo']}}</a></td>   
            <td><a href="{{ route('providers.show', ['provider' => $provider['id']])}}">{{$provider['providerDescription']}}</a></td>   
            <td><a href="{{ route('providers.show', ['provider' => $provider['id']])}}">
                @php
                 $wares = json_decode($provider['providerWare'])
                @endphp
                @foreach($wares as $ware)
                {{$ware}}
                @endforeach
        </a></td>   
            <td><a href="{{ route('providers.show', ['provider' => $provider['id']])}}">{{$provider['providerSpecialization']}}</a></td>
            <td><a href="{{ route('providers.show', ['provider' => $provider['id']])}}">
                @php
                 $categories = json_decode($provider['providerCategory'])
                @endphp
                @foreach($categories as $category)
                {{$category}}
                @endforeach
        </a></td>         
            <td><a href="{{ route('providers.show', ['provider' => $provider['id']])}}">{{$provider['providerURL']}}</a></td>   
            <td><a href="{{ route('providers.show', ['provider' => $provider['id']])}}">
                @php
                 $robottypes = json_decode($provider['providerRobotType'])
                @endphp
                @foreach($robottypes as $robottype)
                {{$robottype}}
                @endforeach
        </a></td>   
            <td><a href="{{ route('providers.show', ['provider' => $provider['id']])}}">{{$provider['providerAddress']}}</a></td>   
            <td><a href="{{ route('providers.show', ['provider' => $provider['id']])}}">{{$provider['providerCity']}}</a></td>   
            <td><a href="{{ route('providers.show', ['provider' => $provider['id']])}}">{{$provider['providerState']}}</a></td>
            <td><a href="{{ route('providers.show', ['provider' => $provider['id']])}}">{{$provider['providerPostcode']}}</a></td>   
            <td><a href="{{ route('providers.show', ['provider' => $provider['id']])}}">{{$provider['providerCountry']}}</a></td>

    </tr>
    @endforeach
        </table>
        </div>
<!-- probably have to implement by pages or numbers to no display too much at a time nanti lag -->

</x-app-layout>