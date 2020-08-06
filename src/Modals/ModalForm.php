<?php
namespace UiBuilder\Components\Modals;

use GetThingsDone\Attributes\Contracts\HasCastAttributes;
use UiBuilder\Form\Concerns\InteractsWithResource;
use UiBuilder\Form\Contracts\HasResource;
use UiBuilder\Form\Views\Form;

class ModalForm extends Form implements HasResource
{
    use InteractsWithResource;

    public $hide = true;

    public $title;

    public function mount(HasCastAttributes $model, string $title = '')
    {
        $this->title = $title;
        parent::mount($model);
    }

    public function render()
    {
        return view('components::modals.modals-form');
    }

    public function open()
    {
        $this->hide = false;
    }

    public function close()
    {
        $this->reset('hide','values');
    }
}