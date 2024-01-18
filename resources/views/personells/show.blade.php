
@php
use App\Models\Organization;
@endphp



<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>


<x-app-layout>

<div>
    <form method="POST" action="{{ route('personells.update',['personell'=> $personell['id']]) }}">

        @csrf
        @method('PUT')
        <div>
            <label  for="personName"> Name </label>
            <input type="text" id="personName" name="personName" value="{{ $personell['personName']}}" required >
        </div>
        <div>
            <label  for="organizationID"> Organization Name </label>
            <select class="organization-select-input" id="organizationID" name="organizationID" >
                <option value="">Unemployed</option>
            @foreach(Organization::all() as $organization)
            @if($personell['organizationID']==$organization['id'])
                <option value="{{$organization['id']}}" selected>{{$organization['name']}}</option>
                @else
                <option value="{{$organization['id']}}">{{$organization['name']}}</option>
                @endif
            @endforeach
            </select>
            <script type="text/javascript">

            $(document).ready(function() {
                $('.organization-select-input').select2();

            });

        </script>
        </div>
        <div>
            <label  for="personJobTitle"> Job Title </label>
            <input type="text" id="personJobTitle" name="personJobTitle" value="{{ $personell['personJobTitle']}}" >
        </div>
        <div>
            <label  for="personDeptDiv"> Department/Division </label>
            <input type="text" id="personDeptDiv" name="personDeptDiv" value="{{ $personell['personDeptDiv']}}" >
        </div>
        <div>
            <label  for="personPosition"> Position </label>
            <select id="personPosition" name="personPosition" value="{{ $personell['personPosition']}}" >
            @if(empty($personell['personPosition']))
            <option value="" selected>Unemployed</option>
            @else
            <option value="">Unemployed</option>
            @endif
            @if(str_contains($personell['personPosition'],"Staff"))
            <option value="Staff" selected>Staff Level</option>
            @else
            <option value="Staff">Staff Level</option>
            @endif
            @if(str_contains($personell['personPosition'],"E"))
            <option value="E" selected>Executive Level(E-Level)</option>
            @else
            <option value="E">Executive Level(E-Level)</option>
            @endif
            @if(str_contains($personell['personPosition'],"M"))
            <option value="M" selected>Managerial Level(M-Level)</option>
            @else
            <option value="M">Managerial Level(M-Level)</option>
            @endif
            @if(str_contains($personell['personPosition'],"C"))
            <option value="C" selected>Chief Level(C-Level)</option>
            @else
            <option value="C">Chief Level(C-Level)</option>
            @endif
            </select>
        </div>


        <div>
            <label  for="personEmail"> Email </label>
            <input type="email" id="personEmail" name="personEmail" value="{{ $personell['personEmail']}}" >
        </div>
        <div>
            <label  for="personNumber"> Phone No </label>
            <input type="tel" id="personNumber" name="personNumber" value="{{ $personell['personNumber']}}" >
        </div>
        
        <div>
                <button  type="submit" >UPDATE</button>
            </div>
        </form>

        <form id="deleteForm" action="{{ route('personells.destroy',['personell'=> $personell['id']]) }}" method="POST" >
            @csrf
            @method('DELETE')

            <!-- Add a JavaScript onclick event to show the confirmation dialog -->
            <button  type="button" onclick="confirmDelete()">DELETE</button>
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