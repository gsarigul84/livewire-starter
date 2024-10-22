@props([
    'title' => '',
    'primary' => false,
    'secondary' => false,
    'info' => false,
    'success' => false,
    'danger' => false,
    'warning' => false,
    'light' => false,
    'dark' => false,
    'soft' => false,
])
<div
    @class([
        'rounded-lg p-4 mt-2 text-sm' => true,
        'bg-secondary text-white' => $secondary,
        'bg-primary text-white' => $primary,
        'bg-info text-white' => $info,
        'bg-success text-white' => $success,
        'bg-danger text-white' => $danger,
        'bg-warning text-white' => $warning,
    ])
    role="alert" tabindex="-1">
    @if(!empty($title))
        <span class="font-bold">{{ $title }}</span>
    @endif
    {{ $slot }}
</div>
