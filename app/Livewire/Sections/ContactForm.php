<?php

namespace App\Livewire\Sections;

use Livewire\Component;
use App\Mail\MessageCreated;
use Illuminate\Support\Facades\Mail;

class ContactForm extends Component
{
    public $name;
    public $email;
    public $phone;
    public $subject;
    public $content;
    public $section;
    public $preferred;
    public $sectiondata;

    public function submitNewMessage()
    {
        $this->validate([
            'name' => 'required',
            'email' => 'required|email',
            'content' => 'required',
            'preferred' => 'required',
        ]);

        Mail::to('info@bandarisacco.co.ke')->send(new MessageCreated($this->name, $this->email, $this->phone, $this->subject, $this->content, $this->preferred));

        session()->flash('success', 'Thank you for reaching out! We appreciate your interest and will be in touch soon.');

        $this->reset();
    }

    public function render()
    {
        return view('livewire.sections.contact-form', [
            'sectiondata' => $this->sectiondata,
        ]);
    }
}
