<?php

namespace App\Livewire\Dependant;

use Indonesia;
use Livewire\Component;
use Laravolt\Indonesia\Models\City;
use Laravolt\Indonesia\Models\Village;
use Laravolt\Indonesia\Models\District;

class Index extends Component
{
    public $provinces;

    public $cities;

    public $districts;

    public $villages;

    public $selectedProvince = null;

    public $selectedCity = null;

    public $selectedDistrict = null;



    public function mount() {
        $this->provinces = Indonesia::allProvinces();

    }

    public function updatedSelectedProvince($province){
        $this->cities = City::where('province_code',$province)->get();
     }

     public function updatedSelectedCity($city){
        $this->districts = District::where('city_code',$city)->get();
     // dd($province);
     }
     public function updatedSelectedDistrict($district){
        $this->villages = Village::where('district_code',$district)->get();
     // dd($province);
     }

    public function render()
    {
        return view('livewire.dependant.index');
    }
}
