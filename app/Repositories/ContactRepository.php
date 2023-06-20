<?php

namespace App\Repositories;

use App\Repositories\Interfaces\ContactRepositoryInterface;
use App\Models\ContactMessage;
use Illuminate\Http\Request;


class ContactRepository implements ContactRepositoryInterface
{

    public function allContacts()
    {
        return ContactMessage::all();
    }

    public function storeContact($data)
    {

        return ContactMessage::create($data);
    }
}
