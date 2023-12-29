
<x-app-layout>

<div>
    <form method="POST" action="{{ route('providers.store') }}">
        @csrf
        <div>
            <label class="text-white" for="providerName"> Provider Name </label>
            <input type="text" id="providerName" name="providerName" value="{{ old('providerName')}}">
        </div>
        <div>
            <label class="text-white" for="providerEmail"> Provider Email </label>
            <input type="email" id="providerEmail" name="providerEmail">
        </div>
        <div>
            <label class="text-white" for="registerNo"> Provider Registration No.</label>
            <input type="text" id="registerNo" name="registerNo">
        </div>
        <div>
            <label class="text-white" for="providerPhoneNo"> Provider Phone No </label>
            <input type="tel" id="providerPhoneNo" name="providerPhoneNo">
        </div>
        <div>
            <label class="text-white" for="providerDescription"> Provider Description </label>
            <input type="text" id="providerDescription" name="providerDescription">
        </div>
        <div class="text-white">
            <input type="checkbox" id="providerWare" name="providerWare[]" value="Software">Software
            <input type="checkbox" id="providerWare" name="providerWare[]" value="Hardware">Hardware
            <input type="checkbox" id="providerWare" name="providerWare[]" value="Firmware">Firmware
            <input type="checkbox" id="providerWare" name="providerWare[]" value="Wetware">Wetware
        </div>
        <div> 
            <label class="text-white" for="providerSpecialization"> Provider Specialization (Drone,Training,Programming,etc...)</label>
            <input type="text" id="providerSpecialization" name="providerSpecialization">
        </div>
        <div class="text-white">
        <label class="text-white" for="providerCategory"> Provider Category</label>
            @foreach(ProviderCategory::all() as $category)
            <input type="checkbox" id="providerCategory" name="providerCategory[]" value="{{$category['categoryName']}}">{{$category['categoryName']}}
            @endforeach
        </div>  
        <div>
            <label class="text-white" for="providerURL"> Provider Website(URL)-if applicable</label>
            <input type="text" id="providerURL" name="providerURL">
        </div>
        <div class="text-white">
        <label class="text-white" for="providerRobotType"> Provider Robot Type</label>
            @foreach(ProviderRobotType::all() as $robottype)
            <input type="checkbox" id="providerRobotType" name="providerRobotType[]" value="{{$robottype['robotTypeName']}}">{{$robottype['robotTypeName']}}
            @endforeach
        </div>  
        <div>
            <label class="text-white" for="providerAddress"> Provider's Address </label>
            <input type="text" id="providerAddress" name="providerAddress">
        </div>
        <div>
            <label class="text-white"for="providerCity"> Provider City </label>
            <input type="text" id="providerCity" name="providerCity">
        </div>
        <div>
            <label class="text-white" for="providerState"> Provider State </label>
                <select name="providerState" id="providerState">
                    <option value="Terengganu">Terengganu</option>
                    <option value="Selangor">Selangor</option>
                    <option value="Sarawak">Sarawak</option>
                    <option value="Sabah">Sabah</option>
                    <option value="Perlis">Perlis</option>
                    <option value="Perak">Perak</option>
                    <option value="Penang">Penang</option>
                    <option value="Pahang">Pahang</option>
                    <option value="Negeri Sembilan">Negeri Sembilan</option>
                    <option value="Malacca">Melaka</option>
                    <option value="Kelantan">Kelantan</option>
                    <option value="Kedah">Kedah</option>
                    <option value="Johor">Johor</option>
                    <option value="Federal Territory of Putrajaya">Federal Territory of Putrajaya</option>
                    <option value="Federal Territory of Labuan">Federal Territory of Labuan</option>
                    <option value="Federal Territory of Kuala Lumpur">Federal Territory of Kuala Lumpur</option>
                </select>  
        </div>
        <div>
            <label class="text-white" for="providerPostcode"> Provider Postcode </label>
            <input type="number" id="providerPostcode" name="providerPostcode">
        </div>
        <div>
            <label class="text-white" for="providerCountry"> Provider Country </label>
            <input type="text" id="providerCountry" name="providerCountry" value="Malaysia" readonly>
        </div> 
        <div>
            <button class="text-white" type="submit">Submit</button>    
        </div>

    </form>
    

</div>

</x-app-layout>