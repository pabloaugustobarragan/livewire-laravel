<?php

namespace App\Livewire\Components;

use Livewire\Attributes\On;
use Livewire\Component;

class Sidebar extends Component
{
    public $isCollapsed = true;
    public $isDark;
    public function render()
    {
        return view('livewire.components.sidebar');
    }

    #[On('collapseSidebar')]
    public function onCollapse()
    {
        $this->isCollapsed = !$this->isCollapsed;
    }
}
