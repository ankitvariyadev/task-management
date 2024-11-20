@props([
    'column' => '',
    'sortCol',
    'sortAsc',
])

<th {{ $attributes->merge(['class' => 'px-4 py-2 text-center']) }}>
    @if ($column !== '')
        <button
            type="button"
            wire:click="sortBy('{{ $column }}')"
            class=""
        >
            <div class="flex items-center gap-2">
                <span>{{ $slot }}</span>
                <div class="text-gray-700">
                    {{-- @if ($sortCol === $column)
                        @if($sortAsc)
                        <i class="fas fa-sort ml-2"></i>
                        @else
                        <i class="fas fa-sort ml-2"></i>
                        @endif
                    @else
                    <i class="fas fa-sort ml-2"></i>
                    @endif --}}
                </div>
            </div>
        </button>
    @else
        {{ $slot }}
    @endif
</th>
