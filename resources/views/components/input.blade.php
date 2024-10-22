@props([
    'label' => '',
    'help' => '',
    'type' => '',
    'prepend' => '',
    'append' => '',
    'inline' => false,
    'showRequired' => false,
    'sm' => false,
    'lg' => false,
])
<div class="w-full mt-4">
    <div
        @class([
             'gap-2.5',
             'grid grid-cols-4' => $inline,
         ])>
        @if(!empty($label))
            <label @class([
                    'form-label',
                    'col mt-2' => $inline,
                    'my-4' => !$inline,
                    ])>
                {{ $label }}
                @if($attributes->has('required') || $showRequired)<span class="text-danger">*</span>@endif
            </label>
        @endif
        <div
            @class([
                'flex flex-col w-full gap-2',
                'col-span-3' => $inline,
            ])>
            <div class="input-group">
                {{ $prepend }}
                <input
                    {{ $attributes->class([
                        'input',
                        'input-sm' => $sm,
                        'input-lg' => $lg,
                        'border-danger' => $errors->has($attributes->get('name')),
                    ]) }}
                    type="{{ $type }}" {{ $attributes->except(['label','type','inline', 'class'])  }}/>
                {{ $append }}
            </div>
                @if(!empty($help))
                    <span class="form-hint">{{ $help }}</span>
                @endif
                @if($errors->has($attributes->get('name')))
                    <span class="form-hint text-danger">{{ $message }}</span>
                @endif

            </div>

    </div>
</div>
