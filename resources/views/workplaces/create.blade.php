@php
use App\Models\Organization;
@endphp
<x-app-layout>

<div>

    <form method="POST" action="{{ route('workplaces.store') }}">
    @csrf
            <!-- Address -->
            <div>
            <label class="text-white" for="organizationID"> Organization Name </label>
            <select class="organization-select-input" id="organizationID" name="organizationID">
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
                <label class="text-white" for="address"> Address </label>
                <input type="text" id="address" name="address" value="{{ old('address')}}">
            </div>
            <div>
                <label class="text-white" for="city"> City </label>
                <input type="text" id="city" name="city" value="{{ old('city')}}">
            </div>
            <div>
                <label class="text-white" for="state"> State </label>
                <select id="state" name="state">
                <option value="Johor">Johor</option>
                <option value="Kedah">Kedah</option>
                <option value="Kelantan">Kelantan</option>
                <option value="Malacca">Malacca</option>
                <option value="Negeri Sembilan">Negeri Sembilan</option>
                <option value="Pahang">Pahang</option>
                <option value="Penang">Penang</option>
                <option value="Perak">Perak</option>
                <option value="Perlis">Perlis</option>
                <option value="Sabah">Sabah</option>
                <option value="Sarawak">Sarawak</option>
                <option value="Selangor">Selangor</option>
                <option value="Kuala Lumpur">Kuala Lumpur</option>
                <option value="Labuan">Labuan</option>
                <option value="Putrajaya">Putrajaya</option>
            </select>
            </div>
            <div>
                <label class="text-white" for="postCode"> Post Code </label>
                <input type="text" id="postCode" name="postCode" value="{{ old('postCode')}}">
            </div>
            <div>
                <label class="text-white" for="country"> Country </label>
                <input type="text" id="country" name="country" value="Malaysia" readonly>
            </div>
            <div>
            <label class="text-white" for="workplaceCategory"> Workplace Category</label>
            <select id="workplaceCategory" name="workplaceCategory">
                <option value="M">Main</option>
                <option value="B">Branch</option>
                <option value="F">Factory</option>
            </select>
            </div>
    
        </div>

        <div>
            <button class="text-white" type="submit">Submit</button>    
        </div>

    </form>

</div>

</x-app-layout>
