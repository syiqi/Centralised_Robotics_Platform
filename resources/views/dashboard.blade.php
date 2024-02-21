@php
use App\Models\Company;
use App\Models\Ministry;
use App\Models\Association;
use App\Models\Personell;
use App\Models\Organization;
use App\Models\Workplace;
$latestOrg = Organization::orderBy('id', 'DESC')->first();
$latestPersonnel = Personell::orderBy('id', 'DESC')->first();
$johorA = 0; $johorC = 0; $johorM = 0;
$kedahA = 0; $kedahC = 0; $kedahM = 0;
$kelantanA = 0; $kelantanC = 0; $kelantanM = 0;
$malaccaA = 0; $malaccaC = 0; $malaccaM = 0;
$negeriA = 0; $negeriC = 0; $negeriM = 0;
$pahangA = 0; $pahangC = 0; $pahangM = 0;
$penangA = 0; $penangC = 0; $penangM = 0;
$perakA = 0; $perakC = 0; $perakM = 0;
$perlisA = 0; $perlisC = 0; $perlisM = 0;
$sabahA = 0; $sabahC = 0; $sabahM = 0;
$sarawakA = 0; $sarawakC = 0; $sarawakM = 0;
$selangorA = 0; $selangorC = 0; $selangorM = 0;
$klA = 0; $klC = 0; $klM = 0;
$labuanA = 0; $labuanC = 0; $labuanM = 0;
$putrajayaA = 0; $putrajayaC = 0; $putrajayaM = 0;
$staCount = 0; $spdCount = 0; $vcdCount = 0;
@endphp

<body class="min-h-screen bg-gradient-to-b from-blue-900 to-red-700">

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 light:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-2 xl:grid-cols-2 gap-4 m-8">
        
    <a href="{{ route('companies.index') }}" :active="request()->routeIs('companies.index')" class="p-2">
    <div class="group bg-white hover: bg-blue-900 overflow-hidden shadow-xl sm:rounded-lg p-6 text-gray-900 light:text-gray-100 cursor-pointer transition-transform duration-300 ease-in-out transform hover:scale-105">
        <div class="flex items-center justify-between" @click="window.location.href='{{ route('companies.index') }}'">
            <div>
                <h3 class="text-2xl font-semibold">{{ __("Number of Companies") }}</h3>
                <span class="text-4xl font-bold">{{ Company::count() }}</span>
            </div>
            <img src="/images/companies.png" alt="Icon" class="ml-4" width="40" height="40">
        </div>
    </div>
    </a>


    <a href="{{ route('ministries.index') }}" :active="request()->routeIs('ministries.index')" class="p-2">
    <div class="group bg-white hover: bg-blue-900 overflow-hidden shadow-xl sm:rounded-lg p-6 text-gray-900 light:text-gray-100 cursor-pointer transition-transform duration-300 ease-in-out transform hover:scale-105">
        <div class="flex items-center justify-between" @click="window.location.href='{{ route('ministries.index') }}'">
            <div>
                <h3 class="text-2xl font-semibold">{{ __("Number of Ministry") }}</h3>
                <span class="text-4xl font-bold">{{ Ministry::count() }}</span>
            </div>
            <img src="/images/ministries.png" alt="Icon" class="ml-4" width="40" height="40">
        </div>
    </div>
    </a>

    <a href="{{ route('associations.index') }}" :active="request()->routeIs('associations.index')" class="p-2">
    <div class="group bg-white hover: bg-blue-900 overflow-hidden shadow-xl sm:rounded-lg p-6 text-gray-900 light:text-gray-100 cursor-pointer transition-transform duration-300 ease-in-out transform hover:scale-105">
        <div class="flex items-center justify-between" @click="window.location.href='{{ route('associations.index') }}'">
            <div>
                <h3 class="text-2xl font-semibold">{{ __("Number of Association") }}</h3>
                <span class="text-4xl font-bold">{{ Association::count() }}</span>
            </div>
            <img src="/images/associations.png" alt="Icon" class="ml-4" width="40" height="40">
        </div>
    </div>
    </a>

    <a href="{{ route('personells.index') }}" :active="request()->routeIs('personells.index')" class="p-2">
    <div class="group bg-white hover: bg-blue-900 overflow-hidden shadow-xl sm:rounded-lg p-6 text-gray-900 light:text-gray-100 cursor-pointer transition-transform duration-300 ease-in-out transform hover:scale-105">
        <div class="flex items-center justify-between" @click="window.location.href='{{ route('personells.index') }}'">
            <div>
                <h3 class="text-2xl font-semibold">{{ __("Number of Personnel") }}</h3>
                <span class="text-4xl font-bold">{{ Personell::count() }}</span>
            </div>
            <img src="/images/personnels.png" alt="Icon" class="ml-4" width="40" height="40">
        </div>
    </div>
    </a>

</div>
<div class="m-8">
@if (!$latestOrg==NULL)
@if($latestOrg->category=='C')
<a href="{{ route('companies.show', ['company' => $latestOrg['id']]) }}" :active="request()->routeIs('companies.show', ['company' => $latestOrg['id']])" class="p-2">
    <div class="group bg-white hover: bg-blue-900 overflow-hidden shadow-xl sm:rounded-lg p-6 text-gray-900 light:text-gray-100 cursor-pointer transition-transform duration-300 ease-in-out transform hover:scale-105">
        <div class="flex items-center justify-between" @click="window.location.href='{{ route('companies.show', ['company' => $latestOrg['id']]) }}'">
            <div>
                <h3 class="text-2xl font-semibold">{{ __("Latest Organization Created: Company") }}</h3>
                <span class="text-4xl font-bold">{{$latestOrg->name }}</span>
            </div>
            <img src="/images/companies.png" alt="Icon" class="ml-4" width="40" height="40">
        </div>
    </div>
    </a>
@elseif($latestOrg->category=='A')
<a href="{{ route('associations.show', ['association' => $latestOrg['id']]) }}" :active="request()->routeIs('associations.show', ['association' => $latestOrg['id']])" class="p-2">
    <div class="group bg-white hover: bg-blue-900 overflow-hidden shadow-xl sm:rounded-lg p-6 text-gray-900 light:text-gray-100 cursor-pointer transition-transform duration-300 ease-in-out transform hover:scale-105">
        <div class="flex items-center justify-between" @click="window.location.href='{{ route('associations.show', ['association' => $latestOrg['id']]) }}'">
            <div>
                <h3 class="text-2xl font-semibold">{{ __("Latest Organization Created: Association") }}</h3>
                <span class="text-4xl font-bold">{{$latestOrg->name }}</span>
            </div>
            <img src="/images/associations.png" alt="Icon" class="ml-4" width="40" height="40">
        </div>
    </div>
    </a>
@elseif($latestOrg->category=='M')
<a href="{{ route('ministries.show', ['ministry' => $latestOrg['id']]) }}" :active="request()->routeIs('ministries.show', ['ministry' => $latestOrg['id']])" class="p-2">
    <div class="group bg-white hover: bg-blue-900 overflow-hidden shadow-xl sm:rounded-lg p-6 text-gray-900 light:text-gray-100 cursor-pointer transition-transform duration-300 ease-in-out transform hover:scale-105">
        <div class="flex items-center justify-between" @click="window.location.href='{{ route('ministries.show', ['ministry' => $latestOrg['id']]) }}'">
            <div>
                <h3 class="text-2xl font-semibold">{{ __("Latest Organization Created: Ministry") }}</h3>
                <span class="text-4xl font-bold">{{$latestOrg->name }}</span>
            </div>
            <img src="/images/ministries.png" alt="Icon" class="ml-4" width="40" height="40">
        </div>
    </div>
    </a>

@endif
@else
<a href="#" :active="#" class="p-2">
    <div class="group bg-white hover: bg-blue-900 overflow-hidden shadow-xl sm:rounded-lg p-6 text-gray-900 light:text-gray-100 cursor-pointer transition-transform duration-300 ease-in-out transform hover:scale-105">
        <div class="flex items-center justify-between" @click="window.location.href='#'">
            <div>
                <h3 class="text-2xl font-semibold">{{ __("Latest Organization Created:None") }}</h3>
                <span class="text-4xl font-bold">None</span>
            </div>
            <img src="/images/ministries.png" alt="Icon" class="ml-4" width="40" height="40">
        </div>
    </div>
    </a>
@endif

@if(!$latestPersonnel==NULL)
    <a href="{{ route('personells.show', ['personell' => $latestPersonnel['id']]) }}" :active="request()->routeIs('personells.show', ['personell' => $latestPersonnel['id']])" class="p-2">
    <div class="group bg-white hover: bg-blue-900 overflow-hidden shadow-xl sm:rounded-lg p-6 text-gray-900 light:text-gray-100 cursor-pointer transition-transform duration-300 ease-in-out transform hover:scale-105">
        <div class="flex items-center justify-between" @click="window.location.href='{{ route('personells.show', ['personell' => $latestPersonnel['id']]) }}'">
            <div>
                <h3 class="text-2xl font-semibold">{{ __("Latest Personnel Created: ") }}{{$latestPersonnel->organization->name ?? 'Unemployed'}}</h3>
                <span class="text-4xl font-bold">{{ $latestPersonnel->personName }}</span>
            </div>
            <img src="/images/personnels.png" alt="Icon" class="ml-4" width="40" height="40">
        </div>
    </div>
    </a>
</div>

@else

<a href="#" :active="#" class="p-2">
    <div class="group bg-white hover: bg-blue-900 overflow-hidden shadow-xl sm:rounded-lg p-6 text-gray-900 light:text-gray-100 cursor-pointer transition-transform duration-300 ease-in-out transform hover:scale-105">
        <div class="flex items-center justify-between" @click="window.location.href='#'">
            <div>
                <h3 class="text-2xl font-semibold">{{ __("Latest Personnel Created: ") }}None</h3>
                <span class="text-4xl font-bold">None</span>
            </div>
            <img src="/images/personnels.png" alt="Icon" class="ml-4" width="40" height="40">
        </div>
    </div>
    </a>
</div>
@endif
@php
foreach(Workplace::all() as $workplace){
if($workplace->state=="Johor"){
if($workplace->organization->category=='C')
$johorC++;
elseif($workplace->organization->category=='A')
$johorA++;
elseif($workplace->organization->category=='M')
$johorM++;
}
if($workplace->state=="Kedah"){
if($workplace->organization->category=='C')
$kedahC++;
elseif($workplace->organization->category=='A')
$kedahA++;
elseif($workplace->organization->category=='M')
$kedahM++;
}
if($workplace->state=="Kelantan"){
if($workplace->organization->category=='C')
$kelantanC++;
elseif($workplace->organization->category=='A')
$kelantanA++;
elseif($workplace->organization->category=='M')
$kelantanM++;
}
if($workplace->state=="Malacca"){
if($workplace->organization->category=='C')
$malaccaC++;
elseif($workplace->organization->category=='A')
$malaccaA++;
elseif($workplace->organization->category=='M')
$malaccaM++;
}
if($workplace->state=="Negeri Sembilan"){
if($workplace->organization->category=='C')
$negeriC++;
elseif($workplace->organization->category=='A')
$negeriA++;
elseif($workplace->organization->category=='M')
$negeriM++;
}
if($workplace->state=="Pahang"){
if($workplace->organization->category=='C')
$pahangC++;
elseif($workplace->organization->category=='A')
$pahangA++;
elseif($workplace->organization->category=='M')
$pahangM++;
}
if($workplace->state=="Penang"){
if($workplace->organization->category=='C')
$penangC++;
elseif($workplace->organization->category=='A')
$penangA++;
elseif($workplace->organization->category=='M')
$penangM++;
}
if($workplace->state=="Perak"){
if($workplace->organization->category=='C')
$perakC++;
elseif($workplace->organization->category=='A')
$perakA++;
elseif($workplace->organization->category=='M')
$perakM++;
}
if($workplace->state=="Perlis"){
if($workplace->organization->category=='C')
$perlisC++;
elseif($workplace->organization->category=='A')
$perlisA++;
elseif($workplace->organization->category=='M')
$perlisM++;
}
if($workplace->state=="Sabah"){
if($workplace->organization->category=='C')
$sabahC++;
elseif($workplace->organization->category=='A')
$sabahA++;
elseif($workplace->organization->category=='M')
$sabahM++;
}
if($workplace->state=="Sarawak"){
if($workplace->organization->category=='C')
$sarawakC++;
elseif($workplace->organization->category=='A')
$sarawakA++;
elseif($workplace->organization->category=='M')
$sarawakM++;
}
if($workplace->state=="Selangor"){
if($workplace->organization->category=='C')
$selangorC++;
elseif($workplace->organization->category=='A')
$selangorA++;
elseif($workplace->organization->category=='M')
$selangorM++;
}
if($workplace->state=="Kuala Lumpur"){
if($workplace->organization->category=='C')
$klC++;
elseif($workplace->organization->category=='A')
$klA++;
elseif($workplace->organization->category=='M')
$klM++;
}
if($workplace->state=="Labuan"){
if($workplace->organization->category=='C')
$labuanC++;
elseif($workplace->organization->category=='A')
$labuanA++;
elseif($workplace->organization->category=='M')
$labuanM++;
}
if($workplace->state=="Putrajaya"){
if($workplace->organization->category=='C')
$putrajayaC++;
elseif($workplace->organization->category=='A')
$putrajayaA++;
elseif($workplace->organization->category=='M')
$putrajayaM++;
}
}

foreach(Company::all() as $company){
 if($company->staEcosystem==!NULL){
    $staCount++;
 }
 if($company->vcdEcosystem==!NULL){
    $vcdCount++;
 }
 if($company->spdEcosystem==!NULL){
    $spdCount++;
 }
}


@endphp
<div class="m-8 group bg-white hover: bg-blue-900 overflow-hidden shadow-xl sm:rounded-lg p-6 text-gray-900 light:text-gray-100 cursor-pointer transition-transform duration-300 ease-in-out transform hover:scale-105 ">
<div id="chartContainer" style="height: 370px; width: 100%;"></div>
</div>
<div class="m-8 group bg-white hover: bg-blue-900 overflow-hidden shadow-xl sm:rounded-lg p-6 text-gray-900 light:text-gray-100 cursor-pointer transition-transform duration-300 ease-in-out transform hover:scale-105 ">
<div id="chartContainer1" style="height: 370px; width: 100%;"></div>
</div>
<script src="https://cdn.canvasjs.com/canvasjs.min.js"></script>

<script>
window.onload = function () {

var chart = new CanvasJS.Chart("chartContainer", {
	animationEnabled: true,
	title:{
		text: "Organization by States"
	},
	toolTip: {
		shared: true,
	},
    axisX:{
   interval: 1
    },
	legend:{
		cursor: "pointer",
		itemclick: toggleDataSeries
	},
	data: [{
		type: "stackedBar",
		name: "Companies",
		showInLegend: "true",
		yValueFormatString: "#,##0",
		dataPoints: [
			{ y: {{$johorC}}, label: "Johor" },
			{ y: {{$kedahC}}, label: "Kedah" },
			{ y: {{$kelantanC}}, label: "Kelantan" },
			{ y: {{$malaccaC}}, label: "Malacca" },
			{ y: {{$negeriC}}, label: "Negeri Sembilan" },
            { y: {{$pahangC}}, label: "Pahang" },
            { y: {{$penangC}}, label: "Penang" },
            { y: {{$perakC}}, label: "Perak" },
            { y: {{$perlisC}}, label: "Perlis" },
            { y: {{$sabahC}}, label: "Sabah" },
            { y: {{$sarawakC}}, label: "Sarawak" },
            { y: {{$selangorC}}, label: "Selangor" },
            { y: {{$klC}}, label: "Kuala Lumpur" },
            { y: {{$labuanC}}, label: "Labuan" },
            { y: {{$putrajayaC}}, label: "Putrajaya" }
		]
	},
	{
		type: "stackedBar",
		name: "Association",
		showInLegend: "true",
		yValueFormatString: "#,##0",
		dataPoints: [
            { y: {{$johorA}}, label: "Johor" },
			{ y: {{$kedahA}}, label: "Kedah" },
			{ y: {{$kelantanA}}, label: "Kelantan" },
			{ y: {{$malaccaA}}, label: "Malacca" },
			{ y: {{$negeriA}}, label: "Negeri Sembilan" },
            { y: {{$pahangA}}, label: "Pahang" },
            { y: {{$penangA}}, label: "Penang" },
            { y: {{$perakA}}, label: "Perak" },
            { y: {{$perlisA}}, label: "Perlis" },
            { y: {{$sabahA}}, label: "Sabah" },
            { y: {{$sarawakA}}, label: "Sarawak" },
            { y: {{$selangorA}}, label: "Selangor" },
            { y: {{$klA}}, label: "Kuala Lumpur" },
            { y: {{$labuanA}}, label: "Labuan" },
            { y: {{$putrajayaA}}, label: "Putrajaya" }
		]
	},
	{
		type: "stackedBar",
		name: "Ministry",
		showInLegend: "true",
		yValueFormatString: "#,##0",
		dataPoints: [
			{ y: {{$johorM}}, label: "Johor" },
			{ y: {{$kedahM}}, label: "Kedah" },
			{ y: {{$kelantanM}}, label: "Kelantan" },
			{ y: {{$malaccaM}}, label: "Malacca" },
			{ y: {{$negeriM}}, label: "Negeri Sembilan" },
            { y: {{$pahangM}}, label: "Pahang" },
            { y: {{$penangM}}, label: "Penang" },
            { y: {{$perakM}}, label: "Perak" },
            { y: {{$perlisM}}, label: "Perlis" },
            { y: {{$sabahM}}, label: "Sabah" },
            { y: {{$sarawakM}}, label: "Sarawak" },
            { y: {{$selangorM}}, label: "Selangor" },
            { y: {{$klM}}, label: "Kuala Lumpur" },
            { y: {{$labuanM}}, label: "Labuan" },
            { y: {{$putrajayaM}}, label: "Putrajaya" }
		]
	}]
});

var chart1 = new CanvasJS.Chart("chartContainer1", {
	exportEnabled: true,
	animationEnabled: true,
	title:{
		text: "Company's Ecosystem"
	},
	legend:{
		cursor: "pointer",
		itemclick: explodePie
	},
	data: [{
		type: "pie",
		showInLegend: true,
		toolTipContent: "{name}: <strong>{y}</strong>",
		indexLabel: "{name} - {y}",
		dataPoints: [
			{ y: {{$staCount}}, name: "STA", exploded: true },
			{ y: {{$vcdCount}}, name: "VCD" },
			{ y: {{$spdCount}}, name: "SPD" }
    		]
	}]
});

chart.render();
chart1.render();

function toggleDataSeries(e) {
	if(typeof(e.dataSeries.visible) === "undefined" || e.dataSeries.visible) {
		e.dataSeries.visible = false;
	}
	else {
		e.dataSeries.visible = true;
	}
	chart.render();
}

function explodePie (e) {
	if(typeof (e.dataSeries.dataPoints[e.dataPointIndex].exploded) === "undefined" || !e.dataSeries.dataPoints[e.dataPointIndex].exploded) {
		e.dataSeries.dataPoints[e.dataPointIndex].exploded = true;
	} else {
		e.dataSeries.dataPoints[e.dataPointIndex].exploded = false;
	}
	e.chart.render();

}
}
</script>

</x-app-layout>
