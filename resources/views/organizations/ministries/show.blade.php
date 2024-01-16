
<x-app-layout>

<div>

    <form method="POST" action="{{ route('ministries.update',['ministry'=> $ministry['id']]) }}">
    @csrf
    @method('PUT')
        <div>
            <label class="text-white" for="name"> Name </label>
            <input type="text" id="name" name="name" value="{{$ministry->organization->name}}" required >
        </div>
        <div>
            <label class="text-white" for="phoneNo"> PhoneLinging </label>
            <input type="tel" id="phoneNo" name="phoneNo" value="{{ $ministry->organization->phoneNo}}" >
            <!-- can set pattern using = pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}"-->
        </div>
        <div>
            <label class="text-white" for="email"> EMAIL </label>
            <input type="email" id="email" name="email" value="{{ $ministry->organization->email}}" >
        </div>
        <div>
            <label class="text-white" for="website"> Website </label>
            <input type="url" id="website" name="website" value="{{ $ministry->organization->website}}" >
        </div>
        <div>
            <input type="hidden" id="category" name="category" value='M'>
        </div>

        <div>


        <div>
            <button class="text-white" type="submit" >Update</button>    
        </div>

    </form>

             
        ////////////////////////////////////////////////////////
<h1 class="text-white">Address<h1>
<div class="tab-wrapper" x-data="{ activeTab:  0 }">
  <div class="flex">
    <label
      @click="activeTab = 0"
      class="tab-control text-white"
      :class="{ 'active': activeTab === 0 }"
    >Main</label>
    <label
      @click="activeTab = 1"
      class="tab-control text-white"
      :class="{ 'active': activeTab === 1 }"
    >Branch</label>
    <label
      @click="activeTab = 2"
      class="tab-control text-white"
      :class="{ 'active': activeTab === 2 }"
    >Factory</label>
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

//////////////////////////////////////////////
<h1 class="text-white">Personnel<h1>
<div class="tab-wrapper" x-data="{ activeTab:  3 }">
  <div class="flex">
    <label
      @click="activeTab = 3"
      class="tab-control text-white"
      :class="{ 'active': activeTab === 3 }"
    >C-Level</label>
    <label
      @click="activeTab = 4"
      class="tab-control text-white"
      :class="{ 'active': activeTab === 4 }"
    >M-Level</label>
    <label
      @click="activeTab = 5"
      class="tab-control text-white"
      :class="{ 'active': activeTab === 5 }"
    >E-Level</label>
    <label
      @click="activeTab = 6"
      class="tab-control text-white"
      :class="{ 'active': activeTab === 6 }"
    >Staff Level</label>
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
        <button class="text-white" type="button" onclick="confirmMinistryDelete()">DELETE</button>
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
