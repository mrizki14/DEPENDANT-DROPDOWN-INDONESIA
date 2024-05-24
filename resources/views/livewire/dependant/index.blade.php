<div class="max-w-md mx-auto">
  <h1 class="text-2xl text-indigo-700">halooo livewire</h1>
  <div class="mt-3">
    <label class="block mb-2 text-sm font-medium" for="province">Provinces</label>
    <div class="mt-2">
        <select wire:model.live="selectedProvince"
         class="border text-gray-300 border-gray-300 rounded-lg focus:ring-blue-500" name="province" id="">
            <option value="">Select Province</option>
            @foreach ($provinces as $province)
                <option value="{{ $province->code }}">{{ $province->name }}</option>
            @endforeach
        </select>
    </div>
  </div>
  <div class="mt-3">
    <label class="block mb-2 text-sm font-medium" for="cities">Cities</label>
    <div class="mt-2">
        <select wire:model.live="selectedCity" class="border text-gray-300 border-gray-300 rounded-lg focus:ring-blue-500" name="cities" id="">
            <option value="">Select cities</option>
            @if ($cities)
            @foreach ($cities as $citie)
                <option value="{{ $citie->code }}">{{ $citie->name }}</option>
            @endforeach
            @endif
        </select>
    </div>
  </div>
  <div class="mt-3">
    <label class="block mb-2 text-sm font-medium" for="districts">Districts</label>
    <div class="mt-2">
        <select wire:model.live="selectedDistrict" class="border text-gray-300 border-gray-300 rounded-lg focus:ring-blue-500" name="districts" id="">
            <option value="">Select Districts</option>
            @if ($districts)
            @foreach ($districts as $district)
                <option value="{{ $district->code }}">{{ $district->name }}</option>
            @endforeach
            @endif
        </select>
    </div>
  </div>
  <div class="mt-3">
    <label class="block mb-2 text-sm font-medium" for="villages">Villages</label>
    <div class="mt-2">
        <select class="border text-gray-300 border-gray-300 rounded-lg focus:ring-blue-500" name="villages" id="">
            <option value="">Select villages</option>
            @if ($villages)
            @foreach ($villages as $village)
                <option value="{{ $village->code }}">{{ $village->name }}</option>
            @endforeach
            @endif
        </select>
    </div>
  </div>
  
</div>
