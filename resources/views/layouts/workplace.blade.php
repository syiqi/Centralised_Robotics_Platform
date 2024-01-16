@php
use App\Models\Workplace;
@endphp

@foreach(Workplace::all() as $workplace)
    @if($workplace['organizationID']==$organization['id'] && $workplace['workplaceCategory']==$type)
  <form method="POST" action="{{ route('workplaces.update',['workplace'=> $workplace['id']]) }}">
    @csrf
    @method('PUT')
            <div>
                <label class="text-white" for="address"> Address </label>
                <input type="text" id="address" name="address" value="{{$workplace['address']}}">
            </div>
            <div>
                <label class="text-white" for="city"> City </label>
                <input type="text" id="city" name="city" value="{{$workplace['city']}}">
            </div>
            <div>
                <label class="text-white" for="state"> State </label>
                <select id="state" name="state">
                    @if($workplace['state']=="Johor")
                <option value="Johor" selected>Johor</option>
                @else
                <option value="Johor">Johor</option>
                @endif
                @if($workplace['state']=="Kedah")
                <option value="Kedah" selected>Kedah</option>
                @else
                <option value="Kedah">Kedah</option>
                @endif
                @if($workplace['state']=="Kelantan")
                <option value="Kelantan" selected>Kelantan</option>
                @else
                <option value="Kelantan">Kelantan</option>
                @endif
                @if($workplace['state']=="Malacca")
                <option value="Malacca" selected>Malacca</option>
                @else
                <option value="Malacca">Malacca</option>
                @endif
                @if($workplace['state']=="Negeri Sembilan")
                <option value="Negeri Sembilan" selected>Negeri Sembilan</option>
                @else
                <option value="Negeri Sembilan">Negeri Sembilan</option>
                @endif
                @if($workplace['state']=="Pahang")
                <option value="Pahang" selected>Pahang</option>
                @else
                <option value="Pahang">Pahang</option>
                @endif
                @if($workplace['state']=="Penang")
                <option value="Penang" selected>Penang</option>
                @else
                <option value="Penang">Penang</option>
                @endif
                @if($workplace['state']=="Perak")
                <option value="Perak" selected>Perak</option>
                @else
                <option value="Perak">Perak</option>
                @endif
                @if($workplace['state']=="Perlis")
                <option value="Perlis" selected>Perlis</option>
                @else
                <option value="Perlis">Perlis</option>
                @endif
                @if($workplace['state']=="Sabah")
                <option value="Sabah" selected>Sabah</option>
                @else
                <option value="Sabah">Sabah</option>
                @endif
                @if($workplace['state']=="Sarawak")
                <option value="Sarawak" selected>Sarawak</option>
                @else
                <option value="Sarawak">Sarawak</option>
                @endif
                @if($workplace['state']=="Selangor")
                <option value="Selangor" selected>Selangor</option>
                @else
                <option value="Selangor">Selangor</option>
                @endif
                @if($workplace['state']=="Kuala Lumpur")
                <option value="Kuala Lumpur" selected>Kuala Lumpur</option>
                @else
                <option value="Kuala Lumpur">Kuala Lumpur</option>
                @endif
                @if($workplace['state']=="Labuan")
                <option value="Labuan" selected>Labuan</option>
                @else
                <option value="Labuan">Labuan</option>
                @endif
                @if($workplace['state']=="Putrajaya")
                <option value="Putrajaya" selected>Putrajaya</option>
                @else
                <option value="Putrajaya">Putrajaya</option>
                @endif
            </select>
            </div>
            <div>
                <label class="text-white" for="postCode"> Post Code </label>
                <input type="text" id="postCode" name="postCode" value="{{$workplace['postCode']}}">
            </div>
            <div>
                <label class="text-white" for="country"> Country </label>
                <input type="text" id="country" name="country" value="Malaysia" readonly>
            </div>
            <div>
            <label class="text-white" for="workplaceCategory"> Workplace Category</label>
            <select id="workplaceCategory" name="workplaceCategory">
                @if($workplace['workplaceCategory']=="M")
                <option value="M" selected>Main</option>
                @else
                <option value="M" >Main</option>
                @endif
                @if($workplace['workplaceCategory']=="B")
                <option value="B" selected>Branch</option>
                @else
                <option value="B" >Branch</option>
                @endif
                @if($workplace['workplaceCategory']=="F")
                <option value="F" selected>Factory</option>
                @else
                <option value="F" >Factory</option>
                @endif
            </select>
            </div>
            <div>
            <button class="text-white" type="submit" >Update</button>    
            </div>
    
        </form>
        <form id="deleteForm_{{ $workplace['id'] }}" action="{{ route('workplaces.destroy',['workplace'=> $workplace['id']]) }}" method="POST">
            @csrf
            @method('DELETE')

            <!-- Add a JavaScript onclick event to show the confirmation dialog -->
            <button class="text-white" type="button" onclick="confirmWorkplaceDelete('{{ $workplace['id'] }}')">X</button>
        </form>
    @endif

    @endforeach
        <u class="text-white"><a href="{{route('workplaces.create')}}">Create new address</a></u>