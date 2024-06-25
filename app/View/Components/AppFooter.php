<?php

namespace App\View\Components;

use Closure;
use App\Models\Content\Social;
use Illuminate\View\Component;
use App\Models\Content\Contact;
use App\Models\Content\QuickLink;
use App\Models\Content\FooterLink;
use App\Models\Content\FooterPage;
use Illuminate\Contracts\View\View;

class AppFooter extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        $footerLinks = FooterLink::all();
        $quickLinks = QuickLink::all();
        $socials = Social::all();
        $footerPages = FooterPage::all();
        $contacts = Contact::all();

        return view('components.app-footer', compact('footerLinks', 'quickLinks', 'socials', 'footerPages', 'contacts'));
    }
}
