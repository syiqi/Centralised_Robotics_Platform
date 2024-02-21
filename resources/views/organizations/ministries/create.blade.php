
<x-app-layout>

<x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 light:text-gray-200 leading-tight">
            {{ __('Register Ministry') }}
        </h2>
    </x-slot>

<div>

    <form method="POST" action="{{ route('ministries.store') }}">
    @csrf

  <!--<style>
    input[type="text"] {
        border-radius: 6px; /* you can adjust this value to make the input box more or less rounded */
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
</style>-->

<div class="max-w-7xl mx-auto sm:px-6 lg:px-8 my-8 h-9 bg-gradient-to-r from-indigo-500 via-purple-500 to-pink-500 shadow-2xl rounded-3xl text-white">
    <p class="text-2xl font-bold text-center">
        <span class="inline-block align-middle">General Information</span>
    </p>
</div>

<div>
    
<div class="max-w-7xl mx-auto sm:px-6 lg:px-8 my-8">    
            <label for="name"> Ministry Name</label>
            <input class="mt-1 p-2 block w-full  border rounded-md" type="text" id="name" name="name" value="{{ old('name')}}" class="w-full">
    </div>
    
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 my-8 flex justify-between">
    <div class="flex-1 mr-4">
        <label  for="phoneNo"> Phone No </label>
        <input class="mt-1 p-2 block w-full  border rounded-md" type="tel" id="phoneNo" name="phoneNo" value="{{ old('phoneNo')}}">
    </div>
    <div class="flex-1 mr-4">
        <label  for="email"> Email </label>
        <input class="mt-1 p-2 block w-full  border rounded-md" type="email" id="email" name="email" value="{{ old('email')}}">
    </div>
    <div class="flex-1">
        <label  for="website"> Website </label>
        <input class="mt-1 p-2 block w-full  border rounded-md" type="url" id="website" name="website" value="{{ old('website')}}">
    </div>
    </div>
    
</div>
            <input type="hidden" id="category" name="category" value='M'>
        </div>

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 my-8 h-9 bg-gradient-to-r from-indigo-500 via-purple-500 to-pink-500 shadow-2xl rounded-3xl">  
            <p class="text-2xl font-bold text-center text-white">
            <span class="inline-block align-middle">Address Information</span>
            </p>
        </div>   


        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 my-8">
            <!-- Address -->

            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 my-8">
                <label for="address"> Address</label>
                <input class = "mt-1 p-2 block w-full  border rounded-md"  type="text" id="address" name="address" value="{{ old('address')}}" class="w-full">
            </div>

            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 my-8 flex justify-between">
    <div class="flex-1 mr-4">
        <label  for="postCode"> Post Code </label>
        <input class="mt-1 p-2 block w-full  border rounded-md" type="text" id="postCode" name="postCode" value="{{ old('postCode')}}">
    </div>
    <div class="flex-1 mr-4">
        <label  for="city"> City </label>
        <input class="mt-1 p-2 block w-full  border rounded-md" type="text" id="city" name="city" value="{{ old('city')}}">
    </div>
    <div class="flex-1 mr-4">
        <label  for="state"> State </label>
        <select class="mt-1 p-2 block w-full  border rounded-md" id="state" name="state">
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
        <input class="mt-1 p-2 block w-full  border rounded-md" type="text" id="country" name="country" value="Malaysia" readonly>
    </div>
</div>
    
        </div>

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 my-8">
            <label  class = "mx-8" for="workplaceCategory"> Workplace Category</label>
            <select class="mx-8 mt-1 p-2 block w-1/3  border rounded-md" id="workplaceCategory" name="workplaceCategory">
                <option value="M"> Main (incl. Manufacturing & Services Activity)</option>
            </select>
            </div>


        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 my-8">
            <!-- there's probably a css file conflicting, cuz can't use tailwind class to style -syamir to taash -->
            <button class = "mx-8" type="submit" style="background-color: #3490dc; color: #ffffff; font-weight: bold; padding: 10px 20px; border-radius: 5px; cursor: pointer; transition: background-color 0.3s ease;">Submit</button>    
        </div>
        

    </form>

</div>

</x-app-layout>
