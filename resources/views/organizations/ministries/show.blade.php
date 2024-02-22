
<x-app-layout>

<div>

    <form method="POST" action="{{ route('ministries.update',['ministry'=> $ministry['id']]) }}">
    @csrf
    @method('PUT')
    
<style>
    input[type="text"] {
        border-radius: 25px; /* you can adjust this value to make the input box more or less rounded */
    }
    input[type="email"] {
        border-radius: 25px; /* you can adjust this value to make the input box more or less rounded */
    }
    input[type="tel"] {
        border-radius: 25px; /* you can adjust this value to make the input box more or less rounded */
    }
    input[type="url"] {
        border-radius: 25px; /* you can adjust this value to make the input box more or less rounded */
    }
</style>

<div class="max-w-7xl mx-auto sm:px-6 lg:px-8 my-8 h-9 bg-gradient-to-r from-indigo-500 via-purple-500 to-pink-500 shadow-2xl rounded-3xl text-white">
    <p class="text-2xl font-bold text-center">
        <span class="inline-block align-middle">General Information</span>
    </p>
</div>
<div>
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 my-8">
            <label  for="name"> Ministry Name </label>
            <input class="w-full" type="text" id="name" name="name" value="{{$ministry->organization->name}}" required >
        </div>
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 my-8 ">
            <label  for="phoneNo"> Phone Number </label>
            <input type="tel" id="phoneNo" name="phoneNo" value="{{ $ministry->organization->phoneNo}}" >
            <!-- can set pattern using = pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}"-->

            <label  for="email"> Email </label>
            <input type="email" id="email" name="email" value="{{ $ministry->organization->email}}" >

            <label  for="website"> Website </label>
            <input type="url" id="website" name="website" value="{{ $ministry->organization->website}}" >
        </div>
  </div>
            <input type="hidden" id="category" name="category" value='M'>
        </div>
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 my-8">
            <button  type="submit" style="background-color: #3490dc; color: #ffffff; font-weight: bold; padding: 10px 20px; border-radius: 5px; cursor: pointer; transition: background-color 0.3s ease;">Update</button>    
        </div>

    </form>

    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 my-8 h-9 bg-gradient-to-r from-indigo-500 via-purple-500 to-pink-500 shadow-2xl rounded-3xl">  
            <p class="text-2xl font-bold text-center text-white">
            <span class="inline-block align-middle">Address Information</span>
            </p>
        </div> 
<div class="tab-wrapper" x-data="{ activeTab:  0 }">
  <div class="flex font-bold text-center text-white">
    <div class="sm:px-6 lg:px-8 my-8 h-9 bg-gradient-to-r from-blue-500 via-grey-500 to-black-500 shadow-2xl rounded-3xl">
    <label
      @click="activeTab = 0"
      class="tab-control "
      :class="{ 'active': activeTab === 0 }"
    > Main (incl. Manufacturing & Services Activity)</label>
  </div>
  <div class="sm:px-6 lg:px-8 my-8 h-9 bg-gradient-to-r from-blue-500 via-grey-500 to-black-500 shadow-2xl rounded-3xl">
    <label
      @click="activeTab = 1"
      class="tab-control "
      :class="{ 'active': activeTab === 1 }"
    >Branch (Manufacturing Activity)</label>
  </div>
    <div class="sm:px-6 lg:px-8 my-8 h-9 bg-gradient-to-r from-blue-500 via-grey-500 to-black-500 shadow-2xl rounded-3xl">
    <label
      @click="activeTab = 2"
      class="tab-control "
      :class="{ 'active': activeTab === 2 }"
    >Branch (Services Activity)</label>
  </div>
  </div>
@php
$organization=$ministry;
@endphp
  <div class="tab-panel" :class="{ 'active': activeTab === 0 }" x-show.transition.in.opacity.duration.600="activeTab === 0">
  @php
$type="M";
@endphp
    @include('layouts.workplace')
  </div>
  <div class="tab-panel" :class="{ 'active': activeTab === 1 }" x-show.transition.in.opacity.duration.600="activeTab === 1">
  @php
$type="B";
@endphp
    @include('layouts.workplace')
  </div>
  <div class="tab-panel" :class="{ 'active': activeTab === 2 }" x-show.transition.in.opacity.duration.600="activeTab === 2">
  @php
$type="F";
@endphp
    @include('layouts.workplace')
  </div>
</div>
<div class="max-w-7xl mx-auto sm:px-6 lg:px-8 my-8 h-9 bg-gradient-to-r from-indigo-500 via-purple-500 to-pink-500 shadow-2xl rounded-3xl">  
            <p class="text-2xl font-bold text-center text-white">
            <span class="inline-block align-middle">List of Personnel</span>
            </p>
        </div> 
<div class="tab-wrapper" x-data="{ activeTab:  3 }">
<div class="flex font-bold text-center text-white">
<div class="sm:px-6 lg:px-8 my-8 h-9 bg-gradient-to-r from-blue-500 via-grey-500 to-black-500 shadow-2xl rounded-3xl">
    <label
      @click="activeTab = 3"
      class="tab-control "
      :class="{ 'active': activeTab === 3 }"
    >Top Management</label>  
  </div>

    <div class="sm:px-6 lg:px-8 my-8 h-9 bg-gradient-to-r from-blue-500 via-grey-500 to-black-500 shadow-2xl rounded-3xl">
    <label
      @click="activeTab = 4"
      class="tab-control "
      :class="{ 'active': activeTab === 4 }"
    >Middle Management</label>  
  </div>

    <div class="sm:px-6 lg:px-8 my-8 h-9 bg-gradient-to-r from-blue-500 via-grey-500 to-black-500 shadow-2xl rounded-3xl">
    <label
      @click="activeTab = 5"
      class="tab-control "
      :class="{ 'active': activeTab === 5 }"
    >Executive</label>  
  </div>

    <div class="sm:px-6 lg:px-8 my-8 h-9 bg-gradient-to-r from-blue-500 via-grey-500 to-black-500 shadow-2xl rounded-3xl">

    <label
      @click="activeTab = 6"
      class="tab-control "
      :class="{ 'active': activeTab === 6 }"
    >Support (Administrative/Clerical)</label>
  </div>
  </div>

  <div class="tab-panel" :class="{ 'active': activeTab === 3 }" x-show.transition.in.opacity.duration.600="activeTab === 3">
    @php
    $level="C";
    @endphp
    @include('layouts.level')
  </div>
  <div class="tab-panel" :class="{ 'active': activeTab === 4 }" x-show.transition.in.opacity.duration.600="activeTab === 4">
    @php
    $level="M";
    @endphp
    @include('layouts.level')
  </div>
  <div class="tab-panel" :class="{ 'active': activeTab === 5 }" x-show.transition.in.opacity.duration.600="activeTab === 5">
    @php
    $level="E";
    @endphp
    @include('layouts.level')
  </div>
  <div class="tab-panel" :class="{ 'active': activeTab === 6 }" x-show.transition.in.opacity.duration.600="activeTab === 6">
    @php
    $level="Staff";
    @endphp
    @include('layouts.level')
    </div>
</div>






<form id="deleteMinistryForm" action="{{ route('ministries.destroy',['ministry'=> $ministry['id']]) }}" method="POST" >
        @csrf
        @method('DELETE')

        <!-- Add a JavaScript onclick event to show the confirmation dialog -->
        <button  type="button" onclick="confirmMinistryDelete()" style="background-color: #FF0000; color: #ffffff; font-weight: bold; padding: 1px 5px; border-radius: 5px; cursor: pointer; transition: background-color 0.3s ease;">DELETE MINISTRY RECORDS</button>
    </form>

</div>
<script type="text/javascript">
    // JavaScript function to show confirmation dialog for ministries
    function confirmMinistryDelete() {
        var isConfirmed = confirm("Are you sure you want to delete?");
        if (isConfirmed) {
            // If confirmed, submit the ministry delete form
            document.getElementById('deleteMinistryForm').submit();
        }
    }

    // JavaScript function to show confirmation dialog for workplaces
    function confirmWorkplaceDelete(workplaceId) {
        var isConfirmed = confirm("Are you sure you want to delete?");
        if (isConfirmed) {
            // If confirmed, submit the form with the specific workplace ID
            document.getElementById('deleteForm_' + workplaceId).submit();
        }
    }
</script>
<script src="https://cdn.jsdelivr.net/npm/alpinejs@2.8.2/dist/alpine.min.js" defer></script>

</x-app-layout>
