@php
use App\Models\ProviderCategory
@endphp

<x-app-layout>
<input type="checkbox" id="" name="et" value="1">edit
<div>
    <form method="POST" action="{{ route('providers.update',['provider'=> $provider['id']]) }}">
        @csrf
        @method('PUT')

        <div>
            <label class="text-white" for="providerName"> Provider Name </label>
            <input type="text" id="providerName" name="providerName" value="{{$provider['providerName']}}">
        </div>
        <div>
            <label class="text-white" for="providerEmail"> Provider Email </label>
            <input type="email" id="providerEmail" name="providerEmail" value="{{$provider['providerEmail']}}">
        </div>
        <div>
            <label class="text-white" for="registerNo"> Provider Registration No.</label>
            <input type="text" id="registerNo" name="registerNo" value="{{$provider['registerNo']}}">
        </div>
        <div>
            <label class="text-white" for="providerPhoneNo"> Provider Phone No </label>
            <input type="tel" id="providerPhoneNo" name="providerPhoneNo" value="{{$provider['providerPhoneNo']}}">
        </div>
        <div>
            <label class="text-white" for="providerDescription"> Provider Description </label>
            <input type="text" id="providerDescription" name="providerDescription" value="{{$provider['providerDescription']}}">
        </div>
        <div class="text-white">
            @if(str_contains($provider['providerWare'],"Software"))
            <input type="checkbox" id="providerWare" name="providerWare[]" value="Software" checked>Software
            @else
            <input type="checkbox" id="providerWare" name="providerWare[]" value="Software">Software
            @endif
            @if(str_contains($provider['providerWare'],"Hardware"))
            <input type="checkbox" id="providerWare" name="providerWare[]" value="Hardware" checked>Hardware
            @else
            <input type="checkbox" id="providerWare" name="providerWare[]" value="Hardware">Hardware
            @endif
            @if(str_contains($provider['providerWare'],"Firmware"))
            <input type="checkbox" id="providerWare" name="providerWare[]" value="Firmware" checked>Firmware
            @else
            <input type="checkbox" id="providerWare" name="providerWare[]" value="Firmware">Firmware
            @endif
            @if(str_contains($provider['providerWare'],"Wetware"))
            <input type="checkbox" id="providerWare" name="providerWare[]" value="Wetware" checked>Wetware
            @else
            <input type="checkbox" id="providerWare" name="providerWare[]" value="Wetware">Wetware
            @endif
        </div>
        <div>
            <label class="text-white" for="providerSpecialization"> Provider Specialization (Drone,Training,Programming,etc...)</label>
            <input type="text" id="providerSpecialization" name="providerSpecialization" value="{{$provider['providerSpecialization']}}">
        </div>
        <div class="text-white">
                @php
                 $categories = json_decode($provider['providerCategory'])
                @endphp
            @foreach(ProviderCategory::all() as $category)
            @foreach($categories as $compareCategory)
            @if(str_contains($category,$compareCategory))
            <input type="checkbox" id="providerCategory" name="providerCategory[]" value="{{$category['categoryName']}}" checked>{{$category['categoryName']}}
            @else
            <input type="checkbox" id="providerCategory" name="providerCategory[]" value="{{$category['categoryName']}}">{{$category['categoryName']}}
            @endif
            @endforeach
            @endforeach
        </div>
        <div>
            <label class="text-white" for="providerURL"> Provider Website(URL)-if applicable</label>
            <input type="text" id="providerURL" name="providerURL" value="{{$provider['providerURL']}}">
        </div>
        <div class="text-white">
            @if(str_contains($provider['providerWare'],"Software"))
            <input type="checkbox" id="providerWare" name="providerWare[]" value="Software" checked>Software
            @endif
        </div>
        <div>
            <label class="text-white" for="providerAddress"> Provider's Address </label>
            <input type="text" id="providerAddress" name="providerAddress" value="{{$provider['providerAddress']}}">
        </div>
        <div>
            <label class="text-white"for="providerCity"> Provider City </label>
            <input type="text" id="providerCity" name="providerCity" value="{{$provider['providerCity']}}">
        </div>
        <div>
            <label class="text-white" for="providerState"> Provider State </label>
                <select name="providerState" id="providerState" value="{{$provider['providerState']}}">
                    <option value="Terengganu">Terengganu</option>
                    <option value="Selangor">Selangor</option>
                    <option value="Sarawak">Sarawak</option>
                    <option value="Sabah">Sabah</option>
                    <option value="Perlis">Perlis</option>
                    <option value="Perak">Perak</option>
                    <option value="Penang">Penang</option>
                    <option value="Pahang">Pahang</option>
                    <option value="Negeri Sembilan">Negeri Sembilan</option>
                    <option value="Malacca">Malacca</option>
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
            <input type="number" id="providerPostcode" name="providerPostcode" value="{{$provider['providerPostcode']}}">
        </div>
        <div>
            <label class="text-white" for="providerCountry"> Provider Country </label>
            <input type="text" id="providerCountry" name="providerCountry" value="Malaysia" readonly>
        </div>
        <!-- <div>
            <label class="text-white" for="providerFounded"> Provider Founded </label>
            <input type="number" id="providerFounded" name="providerFounded">
        </div>
        <div>
            <label class="text-white" for="providerDescription"> Provider Description </label>
            <input type="text" id="providerDescription" name="providerDescription">
        </div>
        <div>
            <label class="text-white" for="providerCategory"> Provider Category </label>
                       <select name="providerCategory" id="providerCategory">
            <option value="Industrial">Industrial</option>
            <option value="Farming and Agriculture">Farming and Agriculture</option>
            <option value="Healthcare">Healthcare</option>
            <option value="Logistics">Logistics</option>
            <option value="Retail and Hospitality">Retail and Hospitality</option>
            <option value="Smart Cities">Smart Cities</option>
            <option value="Services">Services</option>
            <option value="Training">Training</option>
            <option value="Other">Other</option>
            Should i make a new table and foreign key the id of each data instead
            </select> 
            <div class="text-white">
            <input type="checkbox" id="providerCategory" name="providerCategory" value="Industrial">Industrial
            <input type="checkbox" id="providerCategory" name="providerCategory" value="Farming and Agriculture">Farming and Agriculture
            <input type="checkbox" id="providerCategory" name="providerCategory" value="Healthcare">Healthcare
            <input type="checkbox" id="providerCategory" name="providerCategory" value="Logistics">Logistics
            <input type="checkbox" id="providerCategory" name="providerCategory" value="Retail and Hospitality">Retail and Hospitality
            <input type="checkbox" id="providerCategory" name="providerCategory" value="Smart Cities">Smart Cities
            <input type="checkbox" id="providerCategory" name="providerCategory" value="Services">Services
            <input type="checkbox" id="providerCategory" name="providerCategory" value="Training">Training
            <input type="checkbox" id="providerCategory" name="providerCategory" value="Other">Other
            </div>
        </div>
        <div>
            <label class="text-white" for="providerRobotType"> Provider's Robot Type </label>
            <select name="providerRobotType" id="providerRobotType">
            <option value="Autonomous Mobile Robots">Autonomous Mobile Robots (AMRs)</option>
            <option value="Automated Guided Vehicles">Automated Guided Vehicles (AGVs)</option>
            <option value="Articulated Robots">Articulated Robots</option>
            <option value="Humanoids">Humanoids</option>
            <option value="Cobots">Cobots</option>
            <option value="Hybrids">Hybrids</option>
            <option value="Other">Other</option>
           Should i make a new table and foreign key the id of each data instead
            </select> 
            <div class="text-white">
            <input type="checkbox" id="providerRobotType" name="providerRobotType" value="Autonomous Mobile Robots">Autonomous Mobile Robots (AMRs)
            <input type="checkbox" id="providerRobotType" name="providerRobotType" value="Automated Guided Vehicles">Automated Guided Vehicles (AGVs)
            <input type="checkbox" id="providerRobotType" name="providerRobotType" value="Articulated Robots">Articulated Robots
            <input type="checkbox" id="providerRobotType" name="providerRobotType" value="Humanoids">Humanoids
            <input type="checkbox" id="providerRobotType" name="providerRobotType" value="Cobots">Cobots
            <input type="checkbox" id="providerRobotType" name="providerRobotType" value="Hybrids">Hybrids
            <input type="checkbox" id="providerRobotType" name="providerRobotType" value="Other">Other
            </div>
        </div>
        <div>
            <label class="text-white" for="providerWare"> Provider's Ware </label>
          <select name="providerWare" id="providerWare">
            <option value="Software">Software</option>
            <option value="Hardware">Hardware</option>
            <option value="Firmware">Firmware</option>
            <option value="Wetware">Other</option>
            Should i make a new table and foreign key the id of each data instead
            </select>        
            <div class="text-white">
            <input type="checkbox" id="providerWare" name="Software" value="Software">Industrial
            <input type="checkbox" id="providerWare" name="Hardware" value="Hardware">Farming and Agriculture
            <input type="checkbox" id="providerWare" name="Firmware" value="Firmware">Healthcare
            <input type="checkbox" id="providerWare" name="Other" value="Other">Logistics
            </div>
        </div>
        <div>
            <label class="text-white" for="providerSpecialization"> Provider Specialization (Drone,Coding,Programming,...etc)</label>
            <input type="text" id="providerSpecialization" name="providerSpecialization">
        </div>
        <div>
            <label class="text-white" for="providerURL"> Provider Website(URL)-if applicable</label>
            <input type="URL" id="providerURL" name="providerURL">
        </div>
        <div>
            <label class="text-white" for="providerAddress"> providerAddress </label>
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
            <option value="Malacca">Malacca</option>
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
        </div> -->

        <div>
            <button class="text-white" type="submit">Submit</button>    
        </div>


    </form>

    <form action="{{ route('providers.destroy',['provider'=> $provider['id']]) }}" method="POST">
    @csrf 
    @method('DELETE')
        <button class="text-white" type="submit">DELETE</button>    
    </form>
    

</div>


</x-app-layout>