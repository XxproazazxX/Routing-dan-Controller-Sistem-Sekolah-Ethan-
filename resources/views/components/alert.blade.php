@if ($type === 'error')
    <div class="border border-red-200 bg-red-50 px-6 py-4 text-sm text-red-700">
    <h1 class="text-lg text-red-500 font -bold">Error</h1>
    <p class="text-red-500">{{ $slot }}</p>
</div>
@elseif ($type === 'success')
    <div class="border border-green-200 bg-green-50 px-6 py-4 text-sm text-green-700">
    <h1 class="text-lg text-green-500 font -bold">Success</h1>
    <p class="text-green-500">{{ $slot }}</p>

@else
    <div class="border border-gray-200 bg-gray-50 px-6 py-4 text-sm text-gray-700">
    <h1 class="text-lg text-gray-500 font -bold">Info</h1>
    <p class="text-gray-500">{{ $slot }}</p>
@endif
