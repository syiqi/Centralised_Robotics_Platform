@php
use App\Models\Workplace;
@endphp

@foreach(Workplace::all() as $workplace)
    @if($workplace['organizationID']==$organization['id'] && $workplace['workplaceCategory']==$type)
  <form method="POST" action="{{ route('workplaces.update',['workplace'=> $workplace['id']]) }}">
    @csrf
    @method('PUT')
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 my-8">
                <label  for="address"> Address </label>
                <input class="mt-1 p-2 block w-full  border rounded-md" type="text" id="address" name="address" value="{{$workplace['address']}}">
            </div>
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 my-8 flex justify-between">
            <div class="flex-1 mr-4">
                <label  for="postCode"> Post Code </label>
                <input class="mt-1 p-2 block w-full  border rounded-md" type="text" id="postCode" name="postCode" value="{{$workplace['postCode']}}">
            </div>
            <div class="flex-1 mr-4">
                <label  for="city"> City </label>
                <input class="mt-1 p-2 block w-full  border rounded-md" type="text" id="city" name="city" value="{{$workplace['city']}}">
            </div>
            <div class="flex-1 mr-4">
                <label  for="state"> State </label>
                <select class="mt-1 p-2 block w-full  border rounded-md" id="state" name="state">
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
            <div class="flex-1">
                <label  for="country"> Country </label>
                <input class="mt-1 p-2 block w-full  border rounded-md" type="text" id="country" name="country" value="Malaysia" readonly>
            </div>
        </div>
            <div>
            <label  for="workplaceCategory"> Workplace Category</label>
            <select class="mt-1 p-2 block w-full  border rounded-md" id="workplaceCategory" name="workplaceCategory">
                @if($workplace['workplaceCategory']=="M")
                <option value="M" selected>Main</option>
                @else
                <option value="M" >Main</option>
                @endif
                @if($workplace->organization->category!='A')
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
                @endif
            </select>
            </div>
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 my-8" >
            <button  type="submit" style="background-color: #3490dc; color: #ffffff; font-weight: bold; padding: 10px 20px; border-radius: 5px; cursor: pointer; transition: background-color 0.3s ease;" >Update</button>    
            </div>
    
        </form>
        <form id="deleteForm_{{ $workplace['id'] }}" action="{{ route('workplaces.destroy',['workplace'=> $workplace['id']]) }}" method="POST">
            @csrf
            @method('DELETE')

            <!-- Add a JavaScript onclick event to show the confirmation dialog -->
            <button  type="button" onclick="confirmWorkplaceDelete('{{ $workplace['id'] }}')">X</button>
        </form>
    @endif

    @endforeach
        <p class="text-blue-500 underline underline-offset-1"><a href="{{route('workplaces.create')}}">Create new address</a></u>