@props(['heading'])
    <div x-show="openModal" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" x-transition:leave="transition ease-in duration-200" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0" class="fixed inset-0 flex justify-center items-center bg-gray-500 bg-opacity-50 z-50">
        <div @click.away="openModal = false" class="bg-white rounded-lg p-8 w-96 shadow-lg">
            <h2 class="text-2xl font-semibold text-gray-800 mb-4">{{ $heading }}</h2>
            {{ $slot }}
        </div>
    </div>    
