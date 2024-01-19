
@php
use App\Models\Organization;
@endphp
<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

<x-app-layout>
<x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 light:text-gray-200 leading-tight">
            {{ __('REGISTER BUSSINES CARD') }}
        </h2>
    </x-slot>
<div class="max-w-2xl mx-auto mt-4 p-4">
    <form method="POST" action="{{ route('personells.store') }}">
        @csrf
        <div class="flex flex-nowrap">
        <div class="w-full mr-2 mb-4">
            <label  for="personName"> Name </label>
            <input class="mt-1 p-2 block w-full  border rounded-md"type="text" id="personName" name="personName" value="{{ old('personName')}}" required>
        </div>
        <div class="w-full mb-4">
            <label  for="organizationID"> Organization Name </label>
            <div class="select2-container w-full">
            <select class="organization-select-input w-full" id="organizationID" name="organizationID">
                <option value="">Unemployed</option>
            @foreach(Organization::all() as $organization) 
                <option value="{{$organization['id']}}">{{$organization['name']}}</option>
            @endforeach
            </select>
            </div>
            <script type="text/javascript">

            $(document).ready(function() {
                $('.organization-select-input').select2();

            });

        </script>
        <x-nav-link :href="route('organizations.create')">
                        {{ __('...Create a new one') }}
        </x-nav-link>
        </div>
    </div>
    <div class="flex flex-nowrap">
        <div class="w-full mb-4">
            <label  for="personJobTitle"> Job Title </label>
            <input class="mt-1 p-2 block w-full border rounded-md" type="text" id="personJobTitle" name="personJobTitle">
        </div>
        <div class="w-full mx-4  mb-4">
            <label  for="personDeptDiv"> Department/Division </label>
            <input class="mt-1 p-2 block w-full border rounded-md" type="text" id="personDeptDiv" name="personDeptDiv">
        </div>
        <div class="w-full mb-4">
            <label  for="personPosition"> Position</label>
            <select class="mt-1 p-2 block w-full border rounded-md" id="personPosition" name="personPosition">
            <option value="">Unemployed</option>
            <option value="Staff">Staff Level</option>
            <option value="E">Executive Level(E-Level)</option>
            <option value="M">Managerial Level(M-Level)</option>
            <option value="C">Chief Level(C-Level)</option>
            </select>
        </div>
        </div>
        <div class="flex flex-nowrap">
        <div class="mb-4">
            EMAILICON
       <!-- <img src="{{url('/images/emailicon.png')}}" alt="Image"/> -->
            <input class="mt-1 p-2 w-1/2 border rounded-md" type="email" id="personEmail" name="personEmail">
        </div>
    </div>
        <div class="mb-4">
            PHONEICON
       <!-- <img src="{{url('/images/phoneicon.png')}}" alt="Image"/> -->
            <input class="mt-1 p-2 w-1/2 border rounded-md" type="tel" id="personNumber" name="personNumber">
        </div>
        
        
        <div>
            <!-- there's probably a css file conflicting, cuz can't use tailwind class to style -syamir to taash -->
            <button  type="submit" style="background-color: #3490dc; color: #ffffff; font-weight: bold; padding: 10px 20px; border-radius: 5px; cursor: pointer; transition: background-color 0.3s ease;">Submit</button>    
        </div>

    </form>    

</div>

</x-app-layout>