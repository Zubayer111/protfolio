<?php

namespace App\Http\Controllers;

use App\Mail\ContacteFormEmail;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    private $contact;
    private $contacts;

    public function index(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|string',
            'email' => 'required|string', 
            'subject' => 'required|string', 
            'message' => 'required|string', 
        ]);
        $this->contact = new Contact();
        $this->contact->name = $request->name;
        $this->contact->email = $request->email;
        $this->contact->subject = $request->subject;
        $this->contact->message = $request->message;
        $this->contact->save();

         $contact_form_data = request()->all();
        Mail::to("mdzubayar46@gmail.com")->send(new ContacteFormEmail($contact_form_data));
         return redirect("/");
    }

    public function view()
    {
        $this->contacts = Contact::all();
        return view("admin.contact.view", ["contacts" => $this->contacts]);
    }
}
