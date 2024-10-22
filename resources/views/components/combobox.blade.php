@props([
    'name',
    'options' => [],
    'value' => '',
    'label' => '',
    'name' => '',
    'optionsFrom' => '',
    'show_required' => false,
    'inline' => false,
    'addable' => false,
    'is_object' => false,
    'has_blank' => false,
    'key_name' => '',
    'text' => '',
])
<div wire:ignore
    x-data="{
      search: '',
      selected: '{{ $value }}',
      selectedText: '',
      open: false,
      key_name: '{{ $key_name }}',
      option_text: '{{ $text }}',
      is_object: {{ $is_object ? 'true' : 'false' }},
      addable: {{ $addable ? 'true' : 'false' }},
      init(){
          var vm = this;
          $watch('selected', function(){
             vm.selectedText = vm.getSelectedText();
          })
          @if($optionsFrom !== '')
          $watch('{{ $optionsFrom }}', function(){
              $nextTick(() => {
                vm.selectedText = vm.getSelectedText();
              })
          })
          @endif
          $nextTick(() => {
            vm.selectedText = vm.getSelectedText();
          })
      },
      addOption(){
         $dispatch('add', { value: this.search })
      },
      getSelectedText() {
          const elements = $root.querySelectorAll('li')
          const element = Array.from(elements).find(el => el.getAttribute('data-value') == this.selected)
          if(!element){ return 'Seçiniz' }
          return element.textContent;
      },
      selectValue(id){
          this.selected = id;
          this.open = false;
          this.search = '';
      },
  }"
    @class([
          'gap-2.5 relative',
          'grid grid-cols-4' => $inline,
      ])
    x-modelable="selected" {{ $attributes->only('x-model') }}>
    @if($label !== '')
        <label @class([ 'form-label gap-2', 'col' => $inline, ])>
            {{ $label }}
            @if($attributes->has('required') || $show_required)
                <span class="text-danger">*</span>
            @endif
        </label>
    @endif
    <div @class([ 'col-span-3'=> $inline, 'w-full relative', ]) >
        <button @click="open = !open" class="select text-start" type="button"
                data-error-target="{{ $name }}" x-text="selectedText"></button>
        <div x-show="open" @click.away="open = false"
             class="absolute left-0 right-0  bg-white border rounded shadow-lg z-10"
             :class="{'top-full': {{ $inline ? 'true' : 'false' }} }">
            <input x-model="search" @keydown.escape.window="open = false" class="input" placeholder="Arama">
            <ul class="max-h-60 overflow-y-auto">
                @if($has_blank)
                    <li data-value="Seçiniz" @click="selectValue('')" class="p-2 cursor-pointer hover:bg-gray-100">
                        <span>Seçiniz</span>
                    </li>
                @endif

                @if($optionsFrom !== '')
                    <template x-for="(option, key) in {{ $optionsFrom }}" :key="`{{ $optionsFrom }}.${key}`">
                        <li x-bind:data-value="is_object ? option[key_name] : key"
                            @click="selectValue(is_object ? option[key_name] : key)"
                            class="p-2 cursor-pointer hover:bg-gray-100"
                            x-show="search.trim() == '' || (is_object ? option[option_text] : option).toLocaleLowerCase().indexOf(search.toLocaleLowerCase())  > -1">
                            <span x-text="is_object ? option[option_text] : option"></span>
                        </li>
                    </template>
                @else
                    @foreach($options as $value=>$option)
                        <li data-value="{{ $value }}"
                            @click="selectValue('{{ $is_object ? $option[$key_name] :  $value }}')"
                            class="p-2 cursor-pointer hover:bg-gray-100"
                            x-show="search.trim() == '' || `{{ $option }}`.toLocaleLowerCase().indexOf(search.toLocaleLowerCase())  > -1">
                            {{ $is_object ? $option[$text] : $option }}
                        </li>
                    @endforeach
                @endif
                @if($addable)
                    <li @click="addOption()" data-value="-1000" class="p-2 cursor-pointer hover:bg-gray-100"
                        x-show="search.trim() != ''" x-text="`Ekle: ${search.toLocaleUpperCase()}`">
                    </li>
                @endif
            </ul>
        </div>
    </div>
</div>
