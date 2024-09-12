<?php

namespace App\Http\Controllers;

use App\Models\ContactModel;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        return view(view: "contact");
    }

    public function getAllContacts()
    {
        $allContacts = ContactModel::all();
        return view("allContacts", compact("allContacts"));
    }

    public function sendContact(Request $request)
    {
        $request->validate([
            "email" => "required|string",
            "subject" => "required|string",
            "message" => "required|string|min:5"
        ]);

        ContactModel::create([
            "email" => $request->get(key: "email"),
            "subject" => $request->get(key: "subject"),
            "message" => $request->get(key: "message"),
        ]);

        return redirect(to: "/shop");
    }
}
