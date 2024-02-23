
@php
use App\Models\Organization;
@endphp
<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

<x-app-layout>
<x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 light:text-gray-200 leading-tight">
            {{ __('Register Business Card') }}
        </h2>
    </x-slot>

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">New organization</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form method="POST" action="{{ route('organizations.store') }}">
        @csrf
          <div class="mb-3">
            <label for="name" class="col-form-label">Organization Name:</label>
            <input class="mt-1 p-2 block w-full  border rounded-md" type="text" id="name" name="name" value="{{ old('name')}}" class="w-full">
          </div>
          <div class="mb-3">
            <label for="category" class="col-form-label">Category:</label>
            <select class="mt-1 p-2 block w-full border rounded-md" id="category" name="category">
            <option value="C">Company</option>
            <option value="A">Association</option>
            <option value="M">Ministry</option>
            </select>
          </div>

                <div class="modal-footer">
        <button type="button" style="background-color: #3490dc; color: #ffffff; font-weight: bold; padding: 10px 20px; border-radius: 5px; cursor: pointer; transition: background-color 0.3s ease;" data-bs-dismiss="modal">Close</button>
        <button type="submit" style="background-color: #3490dc; color: #ffffff; font-weight: bold; padding: 10px 20px; border-radius: 5px; cursor: pointer; transition: background-color 0.3s ease;">Submit</button>
        </div>
        </form>


    </div>
    </div>
  </div>
</div>






    
<div class="max-w-7xl mx-auto mt-4 p-4">
    <form method="POST" action="{{ route('personells.store') }}">
        @csrf
        <div class="flex flex-nowrap">
        <div class="w-full mr-2 mb-4">
            <label  for="personName"> Name </label>
            <input class="mt-1 p-2 block w-full  border rounded-md" type="text" id="personName" name="personName" value="{{ old('personName')}}" required>
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
    <button type="button" class=" text-blue-500 underline underline-offset-2" data-bs-toggle="modal" data-bs-target="#exampleModal">...Create a new organization</button>
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
            <option value="C">Top Management</option>
            <option value="M">Middle Management</option>
            <option value="E">Executive</option>
            <option value="Staff">Support (Administrative/Clerical)</option>
            </select>
        </div>
        </div>
        <div class="flex">
        <div class="mb-2 w-1/2">
        <div class="mb-4">
            <img src="{{url('/images/emailicon.png')}}" width="50" height ="50" alt="Email"  style="float: left; margin-right: 10px;"/>
            <input class="mt-1 p-2 w-1/2 border rounded-md" type="email" id="personEmail" name="personEmail">
        </div>

        <div class="mb-4">

            <img src="{{url('/images/phoneicon.png')}}" width="50" height ="50" alt="Phone Number" style="float: left; margin-right: 10px;" />
            <input class="mt-1 p-2 w-1/2 border rounded-md" type="tel" id="personNumber" name="personNumber">
        </div>
        </div>
                
                <div class="mb-2 w-1/2">
               <label> <input type="radio" id="personGender" name="personGender" value="Male" > Male</label>
                <label> <input type="radio" id="personGender" name="personGender" value="Female" >Female</label>
        </div>
        </div>
        <div>
            <!-- there's probably a css file conflicting, cuz can't use tailwind class to style -syamir to taash -->
            <button  type="submit" style="background-color: #3490dc; color: #ffffff; font-weight: bold; padding: 10px 20px; border-radius: 5px; cursor: pointer; transition: background-color 0.3s ease;">Submit</button>    
        </div>

    </form>    

</div>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</x-app-layout>