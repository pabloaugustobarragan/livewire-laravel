<?php

namespace App\Livewire\Pages;

use Livewire\Component;

class Dashboard extends Component
{
    public function render()
    {
        return view('livewire.pages.dashboard');
    }

    public function emitCollapse()
    {
        $this->dispatch('collapseSidebar');
    }
}
