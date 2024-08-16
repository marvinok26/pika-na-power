<?php

namespace App\Livewire\Sections;

use Livewire\Component;
use App\Mail\SlotBooked;
use Illuminate\Support\Facades\Mail;

class DemonstrationClasses extends Component
{
    public $sectiondata;
    public $name = '';
    public $email = '';

    public function bookSlot()
    {
        $this->validate([
            'name' => 'required',
            'email' => 'required|email',
        ]);

        Mail::to('info@pikanapower.co.ke')->send(new SlotBooked($this->name, $this->email));

        session()->flash('success', 'Thank you for booking a slot. We will get back to you shortly.');

        $this->reset(['name', 'email']);
    }

    public function render()
    {
        return view('livewire.sections.demonstration-classes', [
            'sectiondata' => $this->sectiondata,
        ]);
    }
}
