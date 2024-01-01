<x-app-layout>

<div>

    <form method="POST" action="{{ route('ministries.store') }}">
    @csrf
        <div>
            <label class="text-white" for="name"> Name </label>
            <input type="text" id="name" name="name" value="{{ old('name')}}" required>
        </div>
        <div>
            <label class="text-white" for="phoneNo"> PhoneLinging </label>
            <input type="tel" id="phoneNo" name="phoneNo" value="{{ old('phoneNo')}}">
            <!-- can set pattern using = pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}"-->
        </div>
        <div>
            <label class="text-white" for="email"> EMAIL </label>
            <input type="email" id="email" name="email" value="{{ old('email')}}">
        </div>
        <div>
            <label class="text-white" for="website"> Website </label>
            <input type="url" id="website" name="website" value="{{ old('website')}}">
        </div>
        <div>
            <input type="hidden" id="category" name="category" value='M'>
        </div>
        <div>
            <button class="text-white" type="submit">Submit</button>    
        </div>

    </form>

</div>

</x-app-layout>
