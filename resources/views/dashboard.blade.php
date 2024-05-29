<x-app-layout>
    <x-sidebar />

    <div class=" sm:ml-64 text-gray-700" x-data="{ cleaningType: null, openTask: null }">
        @include('layouts.navigation')
       <section>
        <a href="{{ route('service.index') }}">go to services</a>
       </section>

    </div>

</x-app-layout>
