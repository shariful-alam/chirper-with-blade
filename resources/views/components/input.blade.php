@props([
  'disabled' => false,
  'error' => false,
  ])

@if ($error)
    <div class="mt-1 text-red-500 text-sm">{{ $error }}</div>
@endif

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50']) !!}>
