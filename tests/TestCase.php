<?php

namespace UiBuilder\Components\Tests;

use Livewire\LivewireServiceProvider;
use UiBuilder\Form\FormServiceProvider;
use Orchestra\Testbench\TestCase as BaseTestCase;
use UiBuilder\Components\ComponentsServiceProvider;
use GetThingsDone\Attributes\AttributesServiceProvider;
use UiBuilder\Modal\ModalServiceProvider;

class TestCase extends BaseTestCase
{

    protected function getPackageProviders($app)
    {
        return [
            ComponentsServiceProvider::class,
            LivewireServiceProvider::class,
            FormServiceProvider::class,
            AttributesServiceProvider::class,
            ModalServiceProvider::class
        ];
    }
}
