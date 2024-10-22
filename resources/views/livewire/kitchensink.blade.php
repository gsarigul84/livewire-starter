<div class="grid grid-cols-1 lg:grid-cols-3 p-2 lg:p-4 gap-4">
    <div>
        <h3 class="text-2xl">Alerts</h3>
        <x-alert primary title="Info">This is a test</x-alert>
        <x-alert secondary title="Info">This is a test</x-alert>
        <x-alert success title="Info">This is a test</x-alert>
        <x-alert info title="Info">This is a test</x-alert>
        <x-alert warning title="Info">This is a test</x-alert>
        <x-alert danger title="Info">This is a test</x-alert>
    </div>
    <div class="grid gap-4">
        <h3 class="text-2xl">Cards</h3>
        <x-card title="Info">
            <x-slot name="actions">
                <span>Text</span>
            </x-slot>
        </x-card>
        <x-card secondary>
            <x-slot name="actions">
                <button>Text</button>
                <button>Text2</button>
            </x-slot>
        </x-card>
    </div>
    <div class="grid gap-4">
        <h3 class="text-2xl">Buttons</h3>
        <x-button primary>Test</x-button>
        <x-button primary soft>Test</x-button>
        <x-button secondary>Test</x-button>
        <x-button success>Test</x-button>
        <x-button info>Test</x-button>
        <x-button warning>Test</x-button>
        <x-button danger>Test</x-button>
    </div>
    <div class="grid gap-4">
        <h3 class="text-2xl">Inputs</h3>
        <x-input label="Name" type="text" />
    </div>
</div>
