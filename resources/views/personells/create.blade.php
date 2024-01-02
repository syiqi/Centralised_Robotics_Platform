
<x-app-layout>

<div>
    <form method="POST" action="{{ route('personells.store') }}">
        @csrf
        <div>
            <label class="text-white" for="personName"> Name </label>
            <input type="text" id="personName" name="personName" value="{{ old('personName')}}">
        </div>
                <div>
            <label class="text-white" for="mainCategory"> Main Category</label>
            <select id="mainCategory" name="mainCategory">
            <option value="">Unknown</option>
            <option value="Political">Political</option>
            </select>
        </div>
        <div>
            <label class="text-white" for="personJobTitle"> Job Title </label>
            <input type="text" id="personJobTitle" name="personJobTitle">
        </div>
        <div>
            <label class="text-white" for="personDeptDiv"> Department/Division </label>
            <input type="text" id="personDeptDiv" name="personDeptDiv">
        </div>
        <div>
            <label class="text-white" for="personPosition"> Main Category</label>
            <select id="personPosition" name="personPosition">
            <option value="Staff">Staff Level</option>
            <option value="E">Executive Level(E-Level)</option>
            <option value="M">Managerial Level(M-Level)</option>
            <option value="C">Chief Level(C-Level)</option>
            </select>
        </div>
        <div>
            <label class="text-white" for="personEmail"> Email </label>
            <input type="email" id="personEmail" name="personEmail">
        </div>
        <div>
            <label class="text-white" for="personNumber"> Phone No </label>
            <input type="tel" id="personNumber" name="personNumber">
        </div>
        <div>
            <button class="text-white" type="submit">Submit</button>    
        </div>

    </form>

    @push('style')
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<style>
    span.select2.select2-container.select2-container--classic{
        width: 100% !important;
    }
</style>
@endpush


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    Laravel 9 Dropdown With Search Example  -  Laravelia                
                </div>
                 <div class="card-body">                    
                    <form class="w-px-500 p-3 p-md-3" action="" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row mb-3">
                            <label class="col-sm-3 col-form-label">Framework</label>
                            <div class="col-sm-9 mt-3">
                                <select class="js-example-basic-single" name="Framework">
                                    <option value="CakePHP">Cake PHP</option>
                                    <option value="Laravel">Laravel</option>
                                    <option value="Symphony">Symphony</option>
                                </select>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-sm-3 col-form-label"></label>
                            <div class="col-sm-9">
                                <button type="submit" class="btn btn-success btn-block text-white">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@push('script')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script>
$(document).ready(function(){
    $('.js-example-basic-single').select2({
        theme: "classic"
    });
});
</script>
@endpush
    

</div>

</x-app-layout>