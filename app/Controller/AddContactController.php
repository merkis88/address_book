<?php

namespace App\Controller;
use App\Model\Contact;

class AddContactController
{
    public function showForm(){
        view('contact/create');
    }

    public function addBD(){
        Contact::create([
            'name' => $_POST['name'],
            'email' => $_POST['email'],
            'phone' => $_POST['phone'],
            'type' => $_POST['type'],
            'comment' => $_POST['comment']
        ]);

        header('location: /');
        exit;

    }

}