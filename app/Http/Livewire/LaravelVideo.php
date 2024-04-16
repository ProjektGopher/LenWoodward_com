<?php

namespace App\Http\Livewire;

use Livewire\Component;

class LaravelVideo extends Component
{
    public string $codeword = '';

    public function validateCodeword(): bool
    {
        return strtolower($this->codeword) === 'zonda';
    }

    public function render()
    {
        return view('livewire.laravel-video');
    }
}
