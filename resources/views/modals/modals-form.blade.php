<div>
    
    <x-modal.buttons.basic wire:click="create" >{{  $action ?? __('components::button.create') }}</x-modal.buttons.basic>
    
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
            <x-modal.buttons.basic wire:click="save" wire:loading.attr="disabled" >{{ __('form::action.save') }}</x-modal.buttons.basic>
            <x-modal.buttons.cancel wire:click="close" wire:loading.attr="disabled" >{{ __('modal::action.cancel') }}</x-modal.buttons.cancel>
        </x-slot>
        
    </x-modal >
    
</div>