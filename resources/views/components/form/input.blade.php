@props(['label', 'type', 'name', 'placeholder'])
<div>
    <label for="{{ $name }}" class="block text-gray-700 font-medium">{{ $label }}</label>
    <input type="{{ $type }}" id="{{ $name }}" name="{{ $name }}" class="w-full px-4 py-2 rounded-md border border-gray-300 focus:outline-none focus:ring-2 focus:ring-teal-500 focus:border-transparent" placeholder="{{ $placeholder }}" required>
</div>

@error($name)
    <div class="mt-2">
        <span class="text-error text-xs+">{{ $message }}</span>
    </div>
@enderror