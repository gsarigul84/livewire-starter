@props([
    'type' => 'button',
    'title' => '',
    'xs' => false,
    'sm' => false,
    'lg' => false,
    'outline' => false,
    'ghost' => false,
    'soft' => false,
    'full' => false,
    'primary' => false,
    'secondary' => false,
    'warning' => false,
    'info' => false,
    'danger' => false,
    'success' => false,
    'light' => false,
    'dark' => false,
])
<button
    type="{{ $type }}"
    {{ $attributes->except(['class', 'title']) }}
    {{ $attributes->class([
            'btn',
            'soft' => $soft,
            'outline' => $outline,
            'btn-xs' => $xs,
            'btn-sm' => $sm,
            'btn-lg' => $lg,
            'btn-info' => $info,
            'btn-primary' => $primary,
            'btn-secondary' => $secondary,
            'btn-warning' => $warning,
            'btn-danger' => $danger,
            'btn-success' => $success,
            'btn-outline' => $outline,
            'btn-clear' => $ghost,
            'btn-block' => $full,
            'btn-light' => $light,

        ]) }}>
    {{ !empty($title) ? $title : $slot  }}
</button>
