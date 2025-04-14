<?php

namespace App\Livewire\NestingId;

use App\Models\Contact;
use Livewire\Component;

class Entry extends Component
{
    public Contact $contact;

    public function mount(Contact $contact)
    {
        $this->contact = $contact;
    }

    public function render()
    {
        return view('livewire.nesting-id.entry');
    }
}
