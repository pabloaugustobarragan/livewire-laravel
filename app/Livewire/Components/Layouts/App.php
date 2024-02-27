<?php

namespace App\Livewire\Components\Layouts;

use Livewire\Component;

class App extends Component
{
    public $isCollapsed = true;
    public $isDark = false;

    public function render()
    {
        return view('livewire.components.layouts.app');
    }

    public function collapse()
    {
        $this->isDark = !$this->isDark;
    }
}
