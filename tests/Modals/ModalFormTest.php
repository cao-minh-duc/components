<?php
namespace UiBuilder\Components\Tests\Modals;

use Livewire\Livewire;
use UiBuilder\Components\Tests\Stubs\Product;
use UiBuilder\Components\Tests\TestCase;
use UiBuilder\Components\Modals\ModalForm;

class ModalFormTest extends TestCase
{
    /** @test */
    public function it_should_reset()
    {
        Livewire::test(ModalForm::class, [
            'model' => new Product
        ])->call('open')->assertSet('hide',false)
        ->call('close',true);
    }
}