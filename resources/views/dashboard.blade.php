<x-app-layout>
    <div class="text-gray-700 m-10" x-data="{ cleaningType: null, openTask: null }">
        {{-- <section>
            <a href="{{ route('service.index') }}">go to services</a>
        </section> --}}

        <div class="py-5">
            <div class="w-full overflow-x-hidden mx-auto">
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

        <div class="grid grid-cols-2 lg:grid-cols-3 gap-6">
            @forelse ($services as $service)
            <div class="col-span-1 transition duration-300 hover:scale-105 cursor-pointer shadow rounded bg-white">
                <div class="px-4 py-4 mb-3 flex">
                    <div class="ml-4 mr-auto">
                        <div class="font-medium">{{ $service->name }}</div>
                        <div class="text-slate-500 text-xs mt-0.5">{{ $service->created_at->diffForHumans() }}</div>
                    </div>
                    <div>
                        <div>
                            <x-dropdown width="w-24">
                                <x-slot:trigger>
                                    <div class="text-right">
                                        <i class='bx bx-dots-vertical-rounded'></i>
                                    </div>
                                </x-slot:trigger>
                                <x-slot:content>
                                    <div class="mx-2">
                                        <div class="w-full">
                                            <a href="{{ route('services.edit', $service) }}"
                                                class="hover:bg-gray-100 transition duration-300 w-full inline-block rounded">
                                                <i class='bx bxs-edit pr-1'></i>Edit
                                            </a>
                                        </div>
                                        <div class="mt-1">
                                            <form action="{{ route('services.destroy', $service) }}" method="post">
                                                @csrf
                                                @method("DELETE")
                                                <button
                                                    class="hover:bg-gray-100 text-red-500 transition duration-300 w-full rounded">
                                                    <i class='bx bx-trash pr-1'></i> Delete
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                </x-slot:content>
                            </x-dropdown>
                        </div>
                        <div @class([ 'py-1' , 'px-2' , 'rounded-full' , 'text-xs' , 'bg-green-500'=>
                            $service->isCleaning(),
                            'bg-blue-500'=> !$service->isCleaning(),
                            'text-white',
                            'cursor-pointer',
                            'font-medium',
                            'mt-5'])>{{ ucfirst($service->type) }}</div>
                    </div>
                </div>
            </div>
            @empty

            @endforelse

        </div>
    </div>
</x-app-layout>