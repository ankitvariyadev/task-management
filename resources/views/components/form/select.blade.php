@props(['name', 'label' => null, 'options' => null])
<div>
    <label for="{{ $name }}" class="block text-gray-700 font-medium">{{ $name }}</label>
    <select name="{{ $name }}" class="w-full px-4 py-2 rounded-md border border-gray-300 focus:outline-none focus:ring-2 focus:ring-teal-500 focus:border-transparent" required>
    @if($options)
        @foreach($options as $value => $label)
            <option value="{{ $value }}">{{ $label }}</option>
        @endforeach
    @endif
    </select>
</div>

@error($name)
    <div class="mt-2">
        <span class="text-error text-xs+">{{ $message }}</span>
    </div>
@enderror