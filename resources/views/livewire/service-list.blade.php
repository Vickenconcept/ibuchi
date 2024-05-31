<div>
    <div class=" text-gray-700" x-data="{ page: 'page-1', cleaningType: null, openTask: null }">
        {{-- @include('layouts.navigation') --}}


        <section style="display: none" x-show="page === 'page-1'" class="px-3 md:px-10 space-y-7 py-10">
            <div class="flex justify-between space-x-3">
                <div class="w-full bg-cyan-800 rounded-full h-2 "></div>
                <div class="w-full bg-gray-400 rounded-full h-2 "></div>
                <div class="w-full bg-gray-400 rounded-full h-2 "></div>
            </div>
            <form class="max-w-5xl mx-auto space-y-7">
                <h2 class="font-bold text-xl capitalize py-5">Enter email to continue</h2>
                <div>
                    <label for="email-address-icon" class="block mb-2 text-sm font-medium text-gray-900 ">Your
                        Email</label>
                    <div class="relative">
                        <div class="absolute inset-y-0 start-0 flex items-center ps-3.5 pointer-events-none">
                            <svg class="w-4 h-4 text-gray-500 " aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                fill="currentColor" viewBox="0 0 20 16">
                                <path
                                    d="m10.036 8.278 9.258-7.79A1.979 1.979 0 0 0 18 0H2A1.987 1.987 0 0 0 .641.541l9.395 7.737Z" />
                                <path
                                    d="M11.241 9.817c-.36.275-.801.425-1.255.427-.428 0-.845-.138-1.187-.395L0 2.6V14a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V2.5l-8.759 7.317Z" />
                            </svg>
                        </div>
                        <input type="email" id="email-address-icon" name="email" wire:model="email"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5   "
                            placeholder="ibuchibasil@gmail.com">
                    </div>
                </div>
                <div>
                    <button type="button"
                        class="text-white bg-orange-500 hover:bg-orange-600 text-bold rounded-lg w-full px-5 py-2"
                        @click="page = 'page-2'"> Next</button>
                </div>
            </form>


        </section>
        <section style="display: none" x-show="page === 'page-2'" class="px-3 md:px-10 space-y-7 py-10">
            <div class="flex justify-between space-x-3">
                <div class="w-full bg-cyan-800 rounded-full h-2 "></div>
                <div class="w-full bg-cyan-800 rounded-full h-2 "></div>
                <div class="w-full bg-gray-400 rounded-full h-2 "></div>
            </div>
            <h2 class="font-bold text-xl capitalize">which service would you like to book?</h2>

            @if (session()->has('error'))
                <div class="alert alert-danger">
                    <p class="text-xs font-semibold text-red-400">You can select ont type of cleaning and
                        extra tasks</p>
                </div>
            @endif
            <form class="space-y-1"  id="form">
                @foreach ($services as $service)
                    <div class="bg-white border-gray-200 px-5  border hover:shadow-md shadow-sm rounded-md ">
                        <div class="flex items-center justify-between   rounded cursor-pointer "
                            id="{{ $service->type }}" wire:loading.attr="disabled"
                            wire:click="checkStatus('{{ $service->id }}', '{{ $service->type }}', '{{ $service->name }}');"
                            @click="cleaningType = @js($service->name)">
                            <label for="{{ $service->id }}"
                                class="w-full py-4 ms-2 text-sm font-medium text-gray-900 ">{{ $service->name }}</label>
                            <input wire:click="checkStatus('{{ $service->id }}', '{{ $service->type }}', '{{ $service->name }}');" id="{{ $service->id }}" type="checkbox" value="" name="cleaning"
                                @if (in_array($service->id, array_column($selectedTypes, 'id'))) checked @endif
                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-500 rounded focus:ring-blue-500  focus:ring-2  ">
                        </div>

                        <div class="pb-3 space-y-3 overflow-y-auto h-56 relative" style="display: none"
                            x-show="cleaningType === @js($service->name)">
                            <p class="text-xs font-bold text-orange-500 text-right pr-2 cursor-pointer "
                                @click="cleaningType =
                        null">hide details</p>

                            <div class="space-y-3">
                                {!! $service->description !!}
                            </div>

                        </div>
                    </div>
                @endforeach
            </form>
            <div>
                <button class="text-white bg-orange-500 hover:bg-orange-600 text-bold rounded-full w-full px-5 py-2"
                     @click="page = 'page-3'" @if ($email === '') disabled @endif> Next
                </button>
            </div>
        </section>

        <section style="display: none" x-show="page === 'page-3'" class="px-3 md:px-10 space-y-7 py-10">
            <div class="flex justify-between space-x-3">
                <div class="w-full bg-cyan-800 rounded-full h-2 "></div>
                <div class="w-full bg-cyan-800 rounded-full h-2 "></div>
                <div class="w-full bg-cyan-800 rounded-full h-2 "></div>
            </div>


            <div class="flex items-center justify-center h-full">
                <div>
                    <div class="flex flex-col items-center space-y-2">
                        <svg xmlns="http://www.w3.org/2000/svg" class="text-green-600 w-28 h-28" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor" stroke-width="1">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                        <h1 class="text-4xl font-bold">Thank You !</h1>
                        <p>Thank you for your interest! Check your email for a link to the guide.</p>
                        <a  @click="page = 'page-1'"
                            class="inline-flex cursor-pointer items-center px-4 py-2 text-white bg-indigo-600 border border-indigo-600 rounded rounded-full hover:bg-indigo-700 focus:outline-none focus:ring">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-3 h-3 mr-2" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M7 16l-4-4m0 0l4-4m-4 4h18" />
                            </svg>
                            <span class="text-sm font-medium">
                                Home
                            </span>
                        </a>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <script>
        document.addEventListener('livewire:initialized', () => {
            @this.on('reload-page', (event) => {
                setTimeout(function() {
                    location.reload();
                }, 1000);

            });
        });
    </script>
</div>
