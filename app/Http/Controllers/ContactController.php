<?php

namespace App\Http\Controllers;

use App\Mail\Contact;
use App\Models\ContactMessage;
use App\Notifications\SendMessage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Notification;
use App\Repositories\Interfaces\ContactRepositoryInterface;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    private $contactRepository;

    public function __construct(ContactRepositoryInterface $contactRepository)
    {
        $this->contactRepository = $contactRepository;
    }
    public function index()
    {
        return view('contact');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'message' => 'required',
        ]);

        $message =  $this->contactRepository->storeContact($data);

        Mail::to($message->email)->send(new Contact($message));

        return redirect('/contact')->with('message', 'Message sent successfully');
    }
}
