<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
  public function index()
  {
    $contacts = Contact::all();
    return view('contacts.index', compact('contacts'));
  }

  public function create()
  {
    return view('contacts.create');
  }

  public function store(Request $request)
  {
    $contact = new Contact;
    $contact->name = $request->input('name');
    $contact->phoneNumber = $request->input('phoneNumber');
    $contact->email = $request->input('email');
    $contact->save();

    return redirect()->route('contacts.index');
  }

  public function edit(Contact $contact)
  {
    return view('contacts.edit', compact('contact'));
  }

  public function update(Request $request, $id)
  {
    $contact = Contact::findOrFail($id);
    $contact->name = $request->input('name');
    $contact->phoneNumber = $request->input('phoneNumber');
    $contact->email = $request->input('email');
    $contact->save();

    return redirect()->route('contacts.index')->with('success', 'Contact updated succesfully');
  }

  public function destroy(Contact $contact)
  {
    $contact->delete();
    return redirect()->route('contacts.index');
  }
}
