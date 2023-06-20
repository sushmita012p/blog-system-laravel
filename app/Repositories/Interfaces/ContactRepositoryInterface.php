<?php

namespace App\Repositories\Interfaces;

use Illuminate\Http\Request;

interface ContactRepositoryInterface
{

    public function allContacts();
    public function storeContact($data);
}
