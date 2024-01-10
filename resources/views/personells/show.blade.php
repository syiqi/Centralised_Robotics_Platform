
@php
use App\Models\Organization;
@endphp



<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>


<x-app-layout>

<div>
    <form method="POST" action="{{ route('personells.update',['personell'=> $personell['id']]) }}">

    <div>
    <input type="checkbox" id="enableDisableInput">
    <label class="text-white" for="enableDisableInput"> Enable/Disable Typing</label>
</div>

        @csrf
        @method('PUT')
        <div>
            <label class="text-white" for="personName"> Name </label>
            <input type="text" id="personName" name="personName" value="{{ $personell['personName']}}" required>
        </div>
        <div>
            <label class="text-white" for="organizationID"> Organization Name </label>
            <select class="organization-select-input" id="organizationID" name="organizationID" disabled>
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
            <label class="text-white" for="personJobTitle"> Job Title </label>
            <input type="text" id="personJobTitle" name="personJobTitle" value="{{ $personell['personJobTitle']}}" disabled>
        </div>
        <div>
            <label class="text-white" for="personDeptDiv"> Department/Division </label>
            <input type="text" id="personDeptDiv" name="personDeptDiv" value="{{ $personell['personDeptDiv']}}" disabled>
        </div>
        <div>
            <label class="text-white" for="personPosition"> Position </label>
            <select id="personPosition" name="personPosition" value="{{ $personell['personPosition']}}" disabled>
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
            <label class="text-white" for="personEmail"> Email </label>
            <input type="email" id="personEmail" name="personEmail" value="{{ $personell['personEmail']}}" disabled>
        </div>
        <div>
            <label class="text-white" for="personNumber"> Phone No </label>
            <input type="tel" id="personNumber" name="personNumber" value="{{ $personell['personNumber']}}" disabled>
        </div>
        
        <div>
                <button class="text-white" type="submit" disabled>Submit</button>
            </div>
        </form>

        <form id="deleteForm" action="{{ route('personells.destroy',['personell'=> $personell['id']]) }}" method="POST" disabled>
            @csrf
            @method('DELETE')

            <!-- Add a JavaScript onclick event to show the confirmation dialog -->
            <button class="text-white" type="button" onclick="confirmDelete()">DELETE</button>
        </form>
    </div>

    <script type="text/javascript">
        $(document).ready(function() {
            $('.organization-select-input').select2();

            $('#enableDisableInput').change(function() {
                var isChecked = $(this).prop('checked');
                $('input:not(#enableDisableInput), select, button').prop('disabled', !isChecked);
            });
        });

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