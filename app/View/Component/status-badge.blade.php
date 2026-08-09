@props(['status' => 'Aktif'])

@php
    $statusLower = strtolower($status);
    $badgeClass = match ($statusLower) {
        'aktif', 'active' => 'bg-emerald-100 text-emerald-800 border-emerald-300',
        default => 'bg-rose-100 text-rose-800 border-rose-300',
    };
@endphp

<span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium border {{ $badgeClass }}">
    {{ $status }}
</span>