<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Content\Social;
use App\Models\Content\Contact;
use App\Models\Content\QuickLink;
use App\Models\Content\FooterLink;
use App\Models\Content\FooterPage;

class Footer extends Component
{
    public $footerLinks;
    public $quickLinks;
    public $socials;
    public $footerPages;
    public $contacts;

    public function mount()
    {
        $this->footerLinks = FooterLink::all();
        $this->quickLinks = QuickLink::all();
        $this->socials = Social::all();
        $this->footerPages = FooterPage::all();
        $this->contacts = Contact::all();
    }

    public function render()
    {
        return view('livewire.footer', [
            'footerLinks' => $this->footerLinks,
            'quickLinks' => $this->quickLinks,
            'socials' => $this->socials,
            'footerPages' => $this->footerPages,
            'contacts' => $this->contacts,
        ]);
    }
}
