<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ProfileForm extends Component
{
    public function render()
    {
        return view('livewire.profile-form');
    }
    public $state = [];

    public function mount()
    {
        $this->state +  auth()->user()->withoutRelations(toArray());
    }
    public function updateProfileInformation(UpdateUserProfileInformation $updater)
    {
        $this->resetErrorBag();
        $updater->update(auth()->user(), $this->state);
        session()->flash("status", "Profile Successfully");
    }
}
