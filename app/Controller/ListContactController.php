<?php

namespace App\Controller;
use App\Model\Contact;

class ListContactController
{
    public function home(): void
    {
        $contact = Contact::orderBy('created_at', 'desc')->get();
        view('contact/home', ['contact' => $contact]);
    }
}