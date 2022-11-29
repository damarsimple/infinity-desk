<?php

namespace App\Http\Livewire;

use Livewire\Component;

class PasswordChangeForm extends Component
{
    public function render()
    {
        return view('livewire.password-change-form');
    }
    public $state = [
        'current-password' => '',
        'password' => '',
        'password_confirmation' => '',
    ];
}
