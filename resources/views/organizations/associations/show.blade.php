<x-app-layout>

<div>

    <form method="POST" action="{{ route('associations.update',['association'=> $association['id']]) }}">
    @csrf
    @method('PUT')
        <div>
            <label  for="name"> Name </label>
            <input type="text" id="name" name="name" value="{{$association->organization->name}}" required>
        </div>
        <div>
            <label  for="phoneNo"> PhoneLinging </label>
            <input type="tel" id="phoneNo" name="phoneNo" value="{{$association->organization->phoneNo}}">
            <!-- can set pattern using = pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}"-->
        </div>
        <div>
            <label  for="email"> EMAIL </label>
            <input type="email" id="email" name="email" value="{{$association->organization->email}}">
        </div>
        <div>
            <label  for="website"> Website </label>
            <input type="url" id="website" name="website" value="{{$association->organization->website}}">
        </div>
        <div>
            <input type="hidden" id="category" name="category" value='A'>
        </div>
        <div>
            <label  for="registrationNo"> Registration No (ROS) </label>
            <input type="text" id="registrationNo" name="registrationNo" value="{{$association->registrationNo}}">
        </div>
        <div>
            <label  for="natureOfActivity"> Nature of Activity</label>
            <input type="text" id="natureOfActivity" name="natureOfActivity" value="{{$association->natureOfActivity}}">
        </div>
<!-- 2 Selection where SubCategory Selection will output options based on the MainCategory Selection -->
        <!-- Your Main select -->
        <div>
<label  for="mainCategory"> Main Category</label>
<select id="mainCategory" name="mainCategory">
@if(empty($association['mainCategory']))
    <option value="" selected>Unknown</option>
@else
    <option value="">Unknown</option>
@endif
@if($association['mainCategory']=="Political")
    <option value="Political" selected>Political</option>
@else
    <option value="Political">Political</option>
@endif
@if($association['mainCategory']=="Shared Benefits")
    <option value="Shared Benefits" selected>Shared Benefits</option>
    @else
    @endif
@if($association['mainCategory']=="Human Rights")
    <option value="Human Rights" selected>Human Rights</option>
    @else
    <option value="Human Rights">Human Rights</option>
    @endif
@if($association['mainCategory']=="Religious")
    <option value="Religious" selected>Religious</option>
    @else
    <option value="Religious" >Religious</option>
    @endif
@if($association['mainCategory']=="Professionalism")
    <option value="Professionalism" selected>Professionalism</option>
    @else
    <option value="Professionalism" >Professionalism</option>
    @endif
@if($association['mainCategory']=="Welfare")
    <option value="Welfare" selected>Welfare</option>
    @else
    <option value="Welfare">Welfare</option>
    @endif
@if($association['mainCategory']=="Art & Cultural")
    <option value="Art & Cultural" selected>Art & Cultural</option>
    @else
    <option value="Art & Cultural">Art & Cultural</option>
    @endif
@if($association['mainCategory']=="Security")
    <option value="Security" selected>Security</option>
    @else
    <option value="Security">Security</option>
    @endif
@if($association['mainCategory']=="Trade")
    <option value="Trade" selected>Trade</option>
    @else
    <option value="Trade" >Trade</option>
    @endif
@if($association['mainCategory']=="Recreation")
    <option value="Recreation" selected>Recreation</option>
    @else
    <option value="Recreation">Recreation</option>
    @endif
@if($association['mainCategory']=="Social")
    <option value="Social" selected>Social</option>
    @else
    <option value="Social">Social</option>
    @endif
    <!-- Add other options as needed -->
</select>

<!-- Your Sub select -->
<br><label  for="subCategory"> Sub Category</label>
<select id="subCategory" name="subCategory">
    <!-- This select will be populated dynamically based on the selected country -->
</select>
Current: {{$association['subCategory']}}

        <div>
            <button  type="submit" >Update</button>    
        </div>
</form>

<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script>
    // Define a mapping of main to subs
    var subByMain = {
        'Political': ['None'],
        'Shared Benefits': ['Death Benefits', 'General'],
        'Human Rights': ['Nature', 'Humanity', 'Consumer'],
        'Religious': ['Devotees Society'],
        'Professionalism': ['General'],
        'Welfare': ['OKU', 'Seniors', 'Children', 'Nursing Home', 'Single Mother', "Member's Welfare", "Societal's Welfare"],
        'Art & Cultural': ['Dancing/Singing/Music', 'Drama/Theather', 'Tradtional Games', 'Martial Arts', 'Paintings', 'Handcrafts', 'Literature'],
        'Security': ['Volunteer Firefighters', 'Crime Preventation'],
        'Trade': ['Trade Chambers', 'Manufacturing Industry', 'Small Medium Enterprise', 'Small Retailers & Hawkers', 'Services'],
        'Recreation': ['General Recreation', 'Exercise', 'Hobby'],
        'Social': ['Neighbourhood', 'Alumni', 'Heritage', 'Occupational', 'Educational']
        // Add other main-sub mappings as needed
    };

    // Function to update the sub select options based on the selected main
    function updateSub() {
        var mainId = $('#mainCategory').val();
        var subCategories = subByMain[mainId] || [];

        // Clear existing options
        $('#subCategory').empty();


        // Add new options based on the selected main
        $.each(subCategories, function(index, subCategory) {

            $('#subCategory').append('<option value="' + subCategory + '">' + subCategory + '</option>');
        });
    }

    // Initial update on page load
    updateSub();

    // Bind the updateSub function to the change event of the Main select
    $('#mainCategory').on('change', updateSub);
</script>
////////////////////////////////////////////////////////
<h1 >Address<h1>
<div class="tab-wrapper" x-data="{ activeTab:  0 }">
  <div class="flex">
    <label
      @click="activeTab = 0"
      class="tab-control "
      :class="{ 'active': activeTab === 0 }"
    >Main</label>
  </div>
@php
$organization=$association;
@endphp
  <div class="tab-panel" :class="{ 'active': activeTab === 0 }" x-show.transition.in.opacity.duration.600="activeTab === 0">
  @php
$type="M";
@endphp
    @include('layouts.workplace')
  </div>
</div>

//////////////////////////////////////////////
<h1 >Personnel<h1>
<div class="tab-wrapper" x-data="{ activeTab:  3 }">
  <div class="flex">
    <label
      @click="activeTab = 3"
      class="tab-control "
      :class="{ 'active': activeTab === 3 }"
    >C-Level</label>
    <label
      @click="activeTab = 4"
      class="tab-control "
      :class="{ 'active': activeTab === 4 }"
    >M-Level</label>
    <label
      @click="activeTab = 5"
      class="tab-control "
      :class="{ 'active': activeTab === 5 }"
    >E-Level</label>
    <label
      @click="activeTab = 6"
      class="tab-control "
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

<form id="deleteAssociationForm" action="{{ route('associations.destroy',['association'=> $association['id']]) }}" method="POST" >
        @csrf
        @method('DELETE')

        <!-- Add a JavaScript onclick event to show the confirmation dialog -->
        <button  type="button" onclick="confirmAssociationDelete()">DELETE</button>
    </form>

</div>
<script type="text/javascript">
    // JavaScript function to show confirmation dialog for ministries
    function confirmAssociationDelete() {
        var isConfirmed = confirm("Are you sure you want to delete?");
        if (isConfirmed) {
            // If confirmed, submit the ministry delete form
            document.getElementById('deleteAssociationForm').submit();
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
