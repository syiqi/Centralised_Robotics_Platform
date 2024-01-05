@php
use App\Models\Organization;
@endphp
<x-app-layout>


<div class= 'text-gray-300' >
            SEARCH, FILTER AND SORT FUNCTION UP HERE

<table class= 'table-fixed bg-white dark:bg-gray-800'>
  
<tr>
    <th>Name</th>															
    <th>Phone Number</th>
    <th>Email</th>
    <th>Website</th>
    <th>Category</th>
    <th>Phone Number</th>
    <th>Employed at</th>
</tr>
@if ($personells->count() == 0)
        <tr>
            <td colspan="5">No personells to display.</td>
        </tr>
@endif
  @foreach ($personells as $personell)
    <tr>
            <td><a href="{{ route('personells.show', ['personell' => $personell['id']])}}">{{$personell['personName']}}</a></td>
            <td><a href="{{ route('personells.show', ['personell' => $personell['id']])}}">{{$personell['personPosition']}}</a></td>   
            <td><a href="{{ route('personells.show', ['personell' => $personell['id']])}}">{{$personell['personJobTitle']}}</a></td>   
            <td><a href="{{ route('personells.show', ['personell' => $personell['id']])}}">{{$personell['personDeptDiv']}}</a></td>   
            <td><a href="{{ route('personells.show', ['personell' => $personell['id']])}}">{{$personell['personEmail']}}</a></td>   
            <td><a href="{{ route('personells.show', ['personell' => $personell['id']])}}">{{$personell['personNumber']}}</a></td>
            <td><a href="{{ route('personells.show', ['personell' => $personell['id']])}}">
            @if($personell['organizationID']!=NULL)
            @php
            $organization = Organization::findorFail($personell['organizationID']);
            @endphp
            {{$organization['name']}}
            @else
            Unemployed
            @endif
  

            </a></td>

    </tr>
    @endforeach
        </table>

        <div class="mx-auto pb-10 w-4/5">
          {{ $personells->links()}}
        </div>
        </div>
<!-- probably have to implement by pages or numbers to no display too much at a time nanti lag -->

</x-app-layout>