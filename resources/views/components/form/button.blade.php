@props(['type', 'variant'])

<div>
    <button 
        type="{{ $type }}"
        {{ $attribute->merge(['class' => "bg-$veriant-600 text-white px-6 py-2 rounded-md hover:bg-$veriant-700 transition"]) }} >
            {{ $slot }}
    </button>
</div>