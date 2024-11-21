@props(['label', 'type', 'name', 'placeholder'])
<div>
    <label for="{{ $name }}" class="block text-gray-700 font-medium">{{ $label }}</label>
    <input {{$attributes}} type="{{ $type }}" class="w-full px-4 py-2 rounded-md border border-gray-300 focus:outline-none focus:ring-2 focus:ring-teal-500 focus:border-transparent @error($name) is-invalid @enderror" placeholder="{{ $placeholder }}" required>
</div>

@error($name)
    <div class="mt-2">
        <span class="text-red-500 text-xs+">{{ $message }}</span>
    </div>
@enderror