<?php

namespace App\Livewire;

use Livewire\Component;

class Waiting extends Component
{
    public $projectSlogan, $projectDescription, $projectLashDate, $lastUpdate;

    public function mount()
    {
        $this->projectSlogan = 'Be private hire vehicle';
        $this->projectLashDate = "2025/06/25";
        $this->lastUpdate = "2024/10/18";
        $this->projectDescription = 'Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit...';
    }

    public function render()
    {
        return view('livewire.waiting')->extends('components.layouts.app')->section('content');
    }
}
