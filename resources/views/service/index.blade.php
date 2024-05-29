<x-app-layout>
    <x-sidebar />

    <div class=" sm:ml-64 text-gray-700" x-data="{ cleaningType: null, openTask: null }">
        @include('layouts.navigation')
        <section class="px-3 md:px-10 space-y-7 py-10">
            <div class="flex justify-between space-x-3">
                <div class="w-full bg-cyan-800 rounded-full h-2 "></div>
                <div class="w-full bg-cyan-800 rounded-full h-2 "></div>
                <div class="w-full bg-gray-400 rounded-full h-2 "></div>
                <div class="w-full bg-gray-400 rounded-full h-2 "></div>
            </div>
            <h2 class="font-bold text-xl capitalize">which service would you like to book</h2>
            <p class="text-xs capitalize font-semibold">you can select ont type of cleaning and extra task</p>
            <div class="space-y-1">
                <div class="bg-white border-gray-200 px-5  border hover:shadow-md shadow-sm rounded-md "
                    @click="cleaningType = 'standard-cleaning'">
                    <div class="flex items-center justify-between   rounded cursor-pointer ">
                        <label for="checkbox-1" class="w-full py-4 ms-2 text-sm font-medium text-gray-900 ">Standard
                            Cleaning</label>
                        <input id="checkbox-1" type="radio" value="" name="cleaning"
                            class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-500 rounded focus:ring-blue-500  focus:ring-2  ">
                    </div>

                    <div class="pb-3 space-y-3 overflow-y-auto h-56 relative" style="display: none"
                        x-show="cleaningType === 'standard-cleaning'">
                        {{-- <p class="text-xs font-bold text-orange-500 text-right pr-2 cursor-pointer " @click="cleaningType = 'deep-cleaning'" >hide details</p> --}}
                        <div class="space-y-3">
                            <h4 class="font-bold text-md uppercase">Bedrooms</h4>
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
                        <div class="space-y-3">
                            <h4 class="font-bold text-md uppercase">Bedrooms</h4>
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
                    </div>
                </div>
                <div class="bg-white border-gray-200 px-5  border hover:shadow-md shadow-sm rounded-md "
                    @click="cleaningType = 'deep-cleaning'">
                    <div class="flex items-center justify-between   rounded cursor-pointer ">
                        <label for="checkbox-2" class="w-full py-4 ms-2 text-sm font-medium text-gray-900 ">Deep
                            Cleaning</label>
                        <input id="checkbox-2" type="radio" value="" name="cleaning"
                            class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-500 rounded focus:ring-blue-500  focus:ring-2  ">
                    </div>
                    <div class="pb-3 space-y-3 overflow-y-auto h-56 relative" style="display: none"
                        x-show="cleaningType === 'deep-cleaning'">
                        
                        <div class="space-y-3">
                            <h4 class="font-bold text-md uppercase">Bedrooms</h4>
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
                        <div class="space-y-3">
                            <h4 class="font-bold text-md uppercase">Bedrooms</h4>
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
                    </div>
                </div>
                <div class="bg-white border-gray-200 px-5  border hover:shadow-md shadow-sm rounded-md "
                    @click="cleaningType = 'move-in'">
                    <div class="flex items-center justify-between   rounded cursor-pointer ">
                        <label for="checkbox-3" class="w-full py-4 ms-2 text-sm font-medium text-gray-900 ">Move-in
                            Cleaning</label>
                        <input id="checkbox-3" type="radio" value="" name="cleaning"
                            class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-500 rounded focus:ring-blue-500  focus:ring-2  ">
                    </div>
                    <div class="pb-3 space-y-3 overflow-y-auto h-56 relative" style="display: none"
                        x-show="cleaningType === 'move-in'">
                        
                        <div class="space-y-3">
                            <h4 class="font-bold text-md uppercase">Bedrooms</h4>
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
                        <div class="space-y-3">
                            <h4 class="font-bold text-md uppercase">Bedrooms</h4>
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
                    </div>
                </div>


                <div class="bg-white border-gray-200 px-5  border hover:shadow-md shadow-sm rounded-md "
                    @click="openTask = 'ironing'">
                    <div class="flex items-center justify-between   rounded cursor-pointer ">
                        <label for="checkbox-4"
                            class="w-full py-4 ms-2 text-sm font-medium text-gray-900 ">Ironing</label>
                        <input id="checkbox-4" type="radio" value="" name="extra-task"
                            class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-500 rounded focus:ring-blue-500  focus:ring-2  ">
                    </div>
                    <div class="pb-3 space-y-3 overflow-y-auto h-56 relative" style="display: none"
                        x-show="openTask === 'ironing'">
                        
                        <div class="space-y-3">
                            <h4 class="font-bold text-md uppercase">Bedrooms</h4>
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
                        <div class="space-y-3">
                            <h4 class="font-bold text-md uppercase">Bedrooms</h4>
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
                    </div>
                </div>
                <div class="bg-white border-gray-200 px-5  border hover:shadow-md shadow-sm rounded-md "
                    @click="openTask = 'laundry'">
                    <div class="flex items-center justify-between   rounded cursor-pointer ">
                        <label for="checkbox-5"
                            class="w-full py-4 ms-2 text-sm font-medium text-gray-900 ">Laundry</label>
                        <input id="checkbox-5" type="radio" value="" name="extra-task"
                            class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-500 rounded focus:ring-blue-500  focus:ring-2  ">
                    </div>
                    <div class="pb-3 space-y-3 overflow-y-auto h-56 relative" style="display: none"
                        x-show="openTask === 'laundry'">
                        
                        <div class="space-y-3">
                            <h4 class="font-bold text-md uppercase">Bedrooms</h4>
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
                        <div class="space-y-3">
                            <h4 class="font-bold text-md uppercase">Bedrooms</h4>
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
                    </div>
                </div>
                <div class="bg-white border-gray-200 px-5  border hover:shadow-md shadow-sm rounded-md "
                    @click="openTask = 'wardrobe'">
                    <div class="flex items-center justify-between   rounded cursor-pointer ">
                        <label for="checkbox-6" class="w-full py-4 ms-2 text-sm font-medium text-gray-900 ">Wardrobe
                            Organization</label>
                        <input id="checkbox-6" type="radio" value="" name="extra-task"
                            class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-500 rounded focus:ring-blue-500  focus:ring-2  ">
                    </div>
                    <div class="pb-3 space-y-3 overflow-y-auto h-56 relative" style="display: none"
                        x-show="openTask === 'wardrobe'">
                        
                        <div class="space-y-3">
                            <h4 class="font-bold text-md uppercase">Bedrooms</h4>
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
                        <div class="space-y-3">
                            <h4 class="font-bold text-md uppercase">Bedrooms</h4>
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
                    </div>
                </div>
            </div>

            <div>
                <button class="text-white bg-orange-500 hover:bg-orange-600 text-bold rounded-full w-full px-5 py-2"
                    disabled> Next</button>
            </div>
        </section>

    </div>

</x-app-layout>