
@php
use App\Models\Organization;
@endphp
<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>


<x-app-layout>

<div>
    <form method="POST" action="{{ route('personells.store') }}">
        @csrf
        <div>
            <label class="text-white" for="personName"> Name </label>
            <input type="text" id="personName" name="personName" value="{{ old('personName')}}" required>
        </div>
        <div>
            <label class="text-white" for="organizationID"> Organization Name </label>
            <select class="organization-select-input" id="organizationID" name="organizationID">
                <option value="">Unemployed</option>
            @foreach(Organization::all() as $organization)
                <option value="{{$organization['id']}}">{{$organization['name']}}</option>
            @endforeach
            </select>
            <script type="text/javascript">

            $(document).ready(function() {
                $('.organization-select-input').select2();

            });

        </script>
        </div>
        <div>
        <x-nav-link :href="route('organizations.create')">
                        {{ __('...Create a new one') }}
        </x-nav-link>
        </div>
        <div>
            <label class="text-white" for="personJobTitle"> Job Title </label>
            <input type="text" id="personJobTitle" name="personJobTitle">
        </div>
        <div>
            <label class="text-white" for="personDeptDiv"> Department/Division </label>
            <input type="text" id="personDeptDiv" name="personDeptDiv">
        </div>
        <div>
            <label class="text-white" for="personPosition"> Position</label>
            <select id="personPosition" name="personPosition">
            <option value="">Unemployed</option>
            <option value="Staff">Staff Level</option>
            <option value="E">Executive Level(E-Level)</option>
            <option value="M">Managerial Level(M-Level)</option>
            <option value="C">Chief Level(C-Level)</option>
            </select>
        </div>
        <div>
            <label class="text-white" for="personEmail"> Email </label>
            <input type="email" id="personEmail" name="personEmail">
        </div>
        <div>
            <label class="text-white" for="personNumber"> Phone No </label>
            <input type="tel" id="personNumber" name="personNumber">
        </div>
        
        <div>
            <button class="text-white" type="submit">Submit</button>    
        </div>

    </form>    

</div>

</x-app-layout>