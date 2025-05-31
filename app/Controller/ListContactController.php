<?php

namespace App\Controller;
use App\Model\Contact;

class ListContactController
{
    public function home(): void
    {
        $contacts = Contact::orderBy('created_at', 'desc')->get();
        view('contact/home', ['contacts' => $contacts]);
    }
}