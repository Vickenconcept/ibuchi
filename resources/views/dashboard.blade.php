<x-app-layout>
    <div class="text-gray-700" x-data="{ cleaningType: null, openTask: null }">
        {{-- <section>
            <a href="{{ route('service.index') }}">go to services</a>
        </section> --}}

        <div class="py-5">
            <div class="w-full overflow-x-hidden mx-auto px-6 lg:px-8">
                <div class="col-span-4">
                    <div class="w-full flex justify-between items-center mb-6">
                        <h1 class="font-bold text-2xl">Services</h1>
                        <div class="flex items-center space-x-3">
                            {{-- button --}}
                            <a href="{{ route('services.create') }}">
                                <x-primary-button>
                                    <div class="flex items-center">
                                        <i class='bx bx-plus mr-2'></i>Add Service
                                    </div>
                                </x-primary-button>
                            </a>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>
</x-app-layout>
