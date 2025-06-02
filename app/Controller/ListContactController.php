<?php

namespace App\Controller;

use App\Model\Contact;

class ListContactController
{
    public function home(): void
    {
        $query = Contact::query();

        if (!empty($_GET['phone'])) {
            $query->where('phone', 'like', '%' . $_GET['phone'] . '%');
        }

        if (!empty($_GET['type']) && in_array($_GET['type'], ['Физическое лицо', 'Юридическое лицо'])) {
            $query->where('type', $_GET['type']);
        }

        $contacts = $query->orderBy('created_at', 'desc')->get();

        view('contact/home', ['contacts' => $contacts]);
    }
}
