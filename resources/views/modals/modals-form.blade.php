<x-form.button text="@lang('components::buton.create')" wire:click="open" />

<x-modal :hide="$hide">
    <x-slot name="header">
        {{ $title }}
    </x-slot>

    <x-slot name="body">
        <form wire:submit.prevent="save">
            <x-form.fieldsets :fieldsets="$this->fieldsets" />
        </form>
    </x-slot>

    <x-slot name="footer">
        <x-modal.buttons.basic wire:click="save" wire:loading.attr="disabled" text="{{ __('form::action.save') }}" />
        <x-modal.buttons.cancel wire:click="close" wire:loading.attr="disabled" text="{{ __('modal::action.cancel') }}" />
    </x-slot>
    
</x-modal >
