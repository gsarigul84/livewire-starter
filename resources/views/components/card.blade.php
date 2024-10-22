@props([
    'title' => '',
    'actions' => '',
    'footer' => '',
    'alert' => '',
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
        'flex flex-col shadow-sm rounded-xl',
        'bg-white' => !$primary && !$secondary && !$info && !$success && !$danger && !$warning && !$light && !$dark && !$soft,
        'bg-secondary-card' => $secondary,
        'bg-primary-card' => $primary,
    ])>
    @if(!empty($title) || !empty($actions))
        <div class="border-b rounded-t-xl py-3 px-4 md:py-4 md:px-5  flex justify-between">
            @if(!empty($title))
                <h3 class="text-xl">
                    {{ $title }}
                </h3>
            @endif
            @if(!empty($actions))
                <div class="flex justify-end w-full gap-2 lg:gap-4">
                    {{ $actions }}
                </div>
            @endif
        </div>
    @endif
    {{ $alert }}
    <div class="p-4 md:p-5">
        {{ $slot }}
    </div>
    @if(!empty($footer))
        <div class="bg-gray-100 border-t rounded-b-xl py-3 px-4 md:py-4 md:px-5 dark:bg-neutral-900 dark:border-neutral-700">
            <p class="mt-1 text-sm text-gray-500 dark:text-neutral-500">
                Last updated 5 mins ago
            </p>
        </div>
    @endif
</div>
