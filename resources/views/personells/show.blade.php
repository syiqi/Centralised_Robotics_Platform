
@php
use App\Models\Organization;
@endphp



<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>


<x-app-layout>
<div class="max-w-7xl mx-auto sm:px-6 lg:px-8 my-8 h-9 bg-gradient-to-r from-indigo-500 via-purple-500 to-pink-500 shadow-2xl rounded-3xl text-white">
    <p class="text-2xl font-bold text-center">
        <span class="inline-block align-middle">Personnel Information</span>
    </p>
</div>
<div class="max-w-7xl mx-auto mt-4 p-4">
    <form method="POST" action="{{ route('personells.update',['personell'=> $personell['id']]) }}">

        @csrf
        @method('PUT')
        <div class="flex flex-nowrap">
        <div class="w-full mr-2 mb-4">
            <label  for="personName"> Name </label>
            <input class="mt-1 p-2 block w-full  border rounded-md" type="text" id="personName" name="personName" value="{{ $personell['personName']}}" required >
        </div>
        <div class="w-full mb-4">
            <label  for="organizationID"> Organization Name </label>
            <div class="w-full mb-4">
            <select class="organization-select-input w-full" id="organizationID" name="organizationID" >
                <option value="">Unemployed</option>
            @foreach(Organization::all() as $organization)
            @if($personell['organizationID']==$organization['id'])
                <option value="{{$organization['id']}}" selected>{{$organization['name']}}</option>
                @else
                <option value="{{$organization['id']}}">{{$organization['name']}}</option>
                @endif
            @endforeach
            </select>
</div>
            <script type="text/javascript">

            $(document).ready(function() {
                $('.organization-select-input').select2();

            });

        </script>
        </div>
        </div>
        <div class="flex flex-nowrap">
        <div class="w-full mb-4">
            <label  for="personJobTitle"> Job Title </label>
            <input class="mt-1 p-2 block w-full border rounded-md" type="text" id="personJobTitle" name="personJobTitle" value="{{ $personell['personJobTitle']}}" >
        </div>
        <div class="w-full mx-4  mb-4">
            <label  for="personDeptDiv"> Department/Division </label>
            <input class="mt-1 p-2 block w-full border rounded-md" type="text" id="personDeptDiv" name="personDeptDiv" value="{{ $personell['personDeptDiv']}}" >
        </div>
        <div class="w-full mb-4">
            <label  for="personPosition"> Position </label>
            <select class="mt-1 p-2 block w-full border rounded-md" id="personPosition" name="personPosition" value="{{ $personell['personPosition']}}" >
            @if(empty($personell['personPosition']))
            <option value="" selected>Unemployed</option>
            @else
            <option value="">Unemployed</option>
            @endif
            @if(str_contains($personell['personPosition'],"C"))
            <option value="C" selected>Top Management</option>
            @else
            <option value="C">Top Management</option>
            @endif
            @if(str_contains($personell['personPosition'],"M"))
            <option value="M" selected>Middle Management</option>
            @else
            <option value="M">Middle Management</option>
            @endif
            @if(str_contains($personell['personPosition'],"E"))
            <option value="E" selected>Executive</option>
            @else
            <option value="E">Executive</option>
            @endif
            @if(str_contains($personell['personPosition'],"Staff"))
            <option value="Staff" selected>Support (Administrative/Clerical)</option>
            @else
            <option value="Staff">Support (Administrative/Clerical)</option>
            @endif
            </select>
        </div>
        </div>


        <div class="mb-4">
        <img src="{{url('/images/emailicon.png')}}" width="50" height ="50" alt="Email"  style="float: left; margin-right: 10px;"/>
            <input class="mt-1 p-2 w-1/2 border rounded-md" type="email" id="personEmail" name="personEmail" value="{{ $personell['personEmail']}}" >
        </div>
        <div class="mb-4">
        <img src="{{url('/images/phoneicon.png')}}" width="50" height ="50" alt="Phone Number" style="float: left; margin-right: 10px;" />
            <input class="mt-1 p-2 w-1/2 border rounded-md" type="tel" id="personNumber" name="personNumber" value="{{ $personell['personNumber']}}" >
        </div>
                
        <div class="flex mb-2 max-w-7xl mx-auto sm:px-6 lg:px-8 my-8">
            @if($personell['personGender']=="Male")
            <label> <input type="radio" id="personGender" name="personGender" value="Male" checked> Male</label>
            <label> <input type="radio" id="personGender" name="personGender" value="Female">Female</label>
            @elseif($personell['personGender']=="Female")
                <label> <input type="radio" id="personGender" name="personGender" value="Male"> Male</label>
                <label> <input type="radio" id="personGender" name="personGender" value="Female" checked>Female</label>
            @else
                <label> <input type="radio" id="personGender" name="personGender" value="Male"> Male</label>
                 <label> <input type="radio" id="personGender" name="personGender" value="Female">Female</label>
            @endif
        </div>
        <div>
                <button  type="submit" style="background-color: #3490dc; color: #ffffff; font-weight: bold; padding: 10px 20px; border-radius: 5px; cursor: pointer; transition: background-color 0.3s ease;">UPDATE</button>
            </div>
        </form>

        <form id="deleteForm" action="{{ route('personells.destroy',['personell'=> $personell['id']]) }}" method="POST" >
            @csrf
            @method('DELETE')

            <!-- Add a JavaScript onclick event to show the confirmation dialog -->
            <button  type="button" onclick="confirmDelete()" style="background-color: #FF0000; color: #ffffff; font-weight: bold; padding: 10px 20px; border-radius: 5px; cursor: pointer; transition: background-color 0.3s ease;">DELETE PERSONNEL RECORD</button>
        </form>
    </div>

    <script type="text/javascript">


        // JavaScript function to show confirmation dialog
        function confirmDelete() {
            var isConfirmed = confirm("Are you sure you want to delete?");
            if (isConfirmed) {
                // If confirmed, submit the form
                document.getElementById('deleteForm').submit();
            }
        }
    </script>
</x-app-layout>