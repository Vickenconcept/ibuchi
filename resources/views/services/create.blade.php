<x-app-layout>
    <div class="col-span-4">
        <div class="flex flex-col justify-start m-10">
            <form method="POST" action="{{ route('services.store') }}">
                @csrf
                <div class="">
                    <div class="2xl:col-span-3 lg:col-span-2 bg-white border text-faded shadow-lg rounded-xl p-6">
                        <div class="py-3 flex items-start justify-start">
                            <h1 class="text-dark font-semibold text-2xl">Create a Service</h1>
                        </div>

                        <div class="grid grid-cols-1 gap-4 w-full">
                            <div class="">
                                <x-input-label for="service_name" class="" :value="__('Service Name*')" />
                                <x-text-input type="text" id="service_name" name="name" class="w-full"
                                    placeholder="Service Name Here" />
                            </div>

                            <div class="">
                                <x-input-label for="servic_type" class="" :value="__('Service Type*')" />
                                <x-select-input class=" w-full" name="type" id="type">
                                    <option selected disabled>--Select a Service Type--</option>
                                    <option value="cleaning">Cleaning</option>
                                    <option value="task">Task</option>
                                    </x-my-select-input>
                            </div>

                            <div class="mt-2">
                                <x-input-label for="description" class="" :value="__('Service Description*')" />
                                <textarea id="summernote" name="description" rows="8"
                                    class="w-full border-gray-300 focus:border-secondary-500 focus:ring-secondary-500 rounded-md shadow-sm"></textarea>
                            </div>

                        </div>
                        <hr class="mt-6 mb-6">


                        <div class="flex justify-end items-end  gap-5 mt-4">
                            <div class="my-5">
                                <x-primary-button class=" text-center rounded-full">
                                    {{ __('Submit') }}
                                </x-primary-button>
                            </div>

                        </div>
                    </div>
                </div>
            </form>
        </div>

    </div>

</x-app-layout>
