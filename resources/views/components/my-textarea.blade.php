@props(['disabled' => false])

<textarea {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge([
    'rows' => 4,
    'class' => 'border-gray-300 focus:border-secondary-500 focus:ring-secondary-500 rounded-md shadow-sm',
]) !!}>{{ $slot }}</textarea>
