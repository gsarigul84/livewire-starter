@props([
    'label' => '',
    'help' => '',
    'type' => '',
    'blankValue' => '',
    'blankText' => 'Seçiniz',
    'options' => [],
    'showRequired' => false,
    'hideBlank' => false,
    'inline' => false,
    'sm' => false,
    'lg' => false,
])
<div class="w-full my-2">
    <div
        @class([
            'gap-2.5',
            'grid grid-cols-4' => $inline,
        ])>
        @if(!empty($label))
            <label @class([
                    'form-label',
                    'col mt-2' => $inline,
                    'my-2' => !$inline,
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
            <select
                {{ $attributes->class([
                    'select',
                    'select-sm' => $sm,
                    'select-lg' => $lg,
                    'border-danger' => $errors->has($attributes->get('name')),
                ]) }} {{ $attributes->except(['label','type','inline', 'class','blank-value'])  }}>
                @if(!$hideBlank)
                    <option value="{{ $blankValue }}">{{ $blankText }}</option>
                @endif
                @if( count($options) > 0)
                    @foreach($options as $key => $option)
                        <option value="{{ $key }}">{{ $option }}</option>
                    @endforeach
                @endif
                {{ $slot }}
            </select>
            @if(!empty($help))
                <span class="form-hint">{{ $help }}</span>
            @endif
            @if($errors->has($attributes->get('name')))
                <span class="form-hint text-danger">{{ $message }}</span>
            @endif

        </div>

    </div>
</div>
