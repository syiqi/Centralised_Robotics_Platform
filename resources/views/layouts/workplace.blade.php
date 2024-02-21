@php
use App\Models\Workplace;
@endphp

@foreach(Workplace::all() as $workplace)
<div class="shadow">
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
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 my-8 flex justify-between">
            <label  for="workplaceCategory"> Workplace Category</label>
            <select class="mt-1 p-2 block w-full  border rounded-md" id="workplaceCategory" name="workplaceCategory">
                @if($workplace['workplaceCategory']=="M")
                <option value="M" selected>Main (incl. Manufacturing & Services Activity)</option>
                @else
                <option value="M" >: Main (incl. Manufacturing & Services Activity)</option>
                @endif
                @if($workplace->organization->category!='A')
                @if($workplace['workplaceCategory']=="B")
                <option value="B" selected>Branch (Manufacturing Activity)</option>
                @else
                <option value="B" >Branch (Manufacturing Activity)</option>
                @endif
                @if($workplace['workplaceCategory']=="F")
                <option value="F" selected>Branch (Services Activity)</option>
                @else
                <option value="F" >Branch (Services Activity)</option>
                @endif
                @endif
            </select>
            </div>
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 mt-8" >
            <button  type="submit" style="background-color: #3490dc; color: #ffffff; font-weight: bold; padding: 10px 20px; border-radius: 5px; cursor: pointer; transition: background-color 0.3s ease;" >Update</button>    
            </div>
    
        </form>
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 my-1">
        <form id="deleteForm_{{ $workplace['id'] }}" action="{{ route('workplaces.destroy',['workplace'=> $workplace['id']]) }}" method="POST">
            @csrf
            @method('DELETE')

            <!-- Add a JavaScript onclick event to show the confirmation dialog -->
            <button class="text-3xl" type="button" onclick="confirmWorkplaceDelete('{{ $workplace['id'] }}')" style="background-color: #FF0000; color: #ffffff; font-weight: bold; padding: 1px 5px; border-radius: 5px; cursor: pointer; transition: background-color 0.3s ease;">ⓧ</button>
        </form>
</div>
    @endif
</div>
    @endforeach
    <button type="button" class=" text-blue-500 underline underline-offset-2" data-bs-toggle="modal" data-bs-target="#exampleModal">...Add new address</button>

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">New organization</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form method="POST" action="{{ route('workplaces.store') }}">
            @csrf

                <input type="hidden" id="organizationID" name="organizationID" value="{{ $organization['id']}}">

            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 my-4">
                <label  for="address"> Address </label>
                <input class = "mt-1 p-2 block w-full  border rounded-md" type="text" id="address" name="address" value="{{ old('address')}}">
            </div>
         <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 my-4 flex justify-between">
            <div class="flex-1 mr-4">
                <label  for="postCode"> Post Code </label>
                <input class = "mt-1 p-2 block w-full  border rounded-md" type="text" id="postCode" name="postCode" value="{{ old('postCode')}}">
            </div>
            <div class="flex-1 mr-4">
                <label  for="city"> City </label>
                <input class = "mt-1 p-2 block w-full  border rounded-md" type="text" id="city" name="city" value="{{ old('city')}}">
            </div>
            <div class="flex-1 mr-4">
                <label  for="state"> State </label>
                <select class = "mt-1 p-2 block w-full  border rounded-md" id="state" name="state">
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
            <div class="flex-1">
                <label  for="country"> Country </label>
                <input class = "mt-1 p-2 block w-full  border rounded-md" type="text" id="country" name="country" value="Malaysia" readonly>
            </div>
        </div>
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 my-8">
                <label for="workplaceCategory"> Workplace Category</label>
                <select class = "mt-1 p-2 block w-full  border rounded-md" id="workplaceCategory" name="workplaceCategory">
                    <option value="M">Main (incl. Manufacturing & Services Activity)</option>
                    <option value="B" class="category-B">Branch (Manufacturing Activity)</option>
                    <option value="F" class="category-B">Branch (Services Activity)</option>
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
