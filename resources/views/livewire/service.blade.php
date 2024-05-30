<div>
    <div class=" text-gray-700" x-data="{ cleaningType: null, openTask: null }">
        @include('layouts.navigation')
        <section class="px-3 md:px-10 space-y-7 py-10">
            <div class="flex justify-between space-x-3">
                <div class="w-full bg-cyan-800 rounded-full h-2 "></div>
                <div class="w-full bg-cyan-800 rounded-full h-2 "></div>
                <div class="w-full bg-gray-400 rounded-full h-2 "></div>
                <div class="w-full bg-gray-400 rounded-full h-2 "></div>
            </div>
            <h2 class="font-bold text-xl capitalize">which service would you like to book</h2>
            
            @if (session()->has('error'))
            <div class="alert alert-danger">
                {{-- {{ session('error') }} --}}
                <p class="text-xs capitalize font-semibold text-red-400">you can select ont type of cleaning and extra task</p>
            </div>
        @endif
            <form class="space-y-1" wire:submit.prevent="submit" id="form">
                @foreach ($services as $service )
                <div class="bg-white border-gray-200 px-5  border hover:shadow-md shadow-sm rounded-md "
                    >
                    <div class="flex items-center justify-between   rounded cursor-pointer " id="{{ $service->type }}" wire:loading.attr="disabled"  wire:click="checkStatus('{{ $service->id }}', '{{ $service->type }}', '{{ $service->name }}'); console.log('killRowId');" @click="cleaningType = @js($service->name)">
                        <label for="{{ $service->id }}" class="w-full py-4 ms-2 text-sm font-medium text-gray-900 ">{{ $service->name}} -- {{ $service->type }}</label>
                        <input id="{{ $service->id }}" type="checkbox" value=""  name="cleaning"  
                        {{-- @if (in_array($service->type, $selectedTypes)) checked @endif --}}
                            class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-500 rounded focus:ring-blue-500  focus:ring-2  ">
                    </div>

                    <div class="pb-3 space-y-3 overflow-y-auto h-56 relative" style="display: none"
                        x-show="cleaningType === @js($service->name)">
                        <p class="text-xs font-bold text-orange-500 text-right pr-2 cursor-pointer " @click="cleaningType = 
                        null" >hide details</p>
                        @foreach ($service->categories as $category )
                        <div class="space-y-3">
                            <h4 class="font-bold text-md uppercase">{{ $category->name }}</h4>
                            <ul class="list-disc px-5 space-y-2">
                                <li class="text-sm capitalize">dusting of furniture and sufaces</li>
                                <li class="text-sm capitalize">making bed</li>
                                <li class="text-sm capitalize">sweep and/or mobbing floor</li>
                                <li class="text-sm capitalize">dusting and wipping of skirtings</li>
                                <li class="text-sm capitalize">folding or hangging clothes on the bed or arounf the
                                    bedroom(
                                    this does not include wardrobe or closet reorganization)</li>
                                <li class="text-sm capitalize">dusting of furniture and sufaces</li>
                                <li class="text-sm capitalize">dusting of furniture and sufaces</li>
                            </ul>
                        </div>
                        @endforeach
                    </div>
                </div>
                @endforeach
                <button type="submit">Submit {{ $count }}</button>
            </form>

            <div>
                <button class="text-white bg-orange-500 hover:bg-orange-600 text-bold rounded-full w-full px-5 py-2"
                    disabled> Next</button>
            </div>
        </section>

    </div>
</div>
