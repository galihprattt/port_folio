<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        $contact = Contact::first(); // Ambil data kontak pertama
        return view('admin.contact.index', compact('contact'));
    }

    public function edit()
    {
        $contact = Contact::first(); // Ambil data kontak pertama

        // Jika data kontak tidak ada, buat kontak baru dan kirim ke view
        if (!$contact) {
            $contact = new Contact(); // Membuat instance baru jika data kontak tidak ada
        }

        return view('admin.contact.edit', compact('contact'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'phone' => 'required',
            'address' => 'required',
        ]);

        $contact = Contact::first(); // Ambil data kontak pertama

        if ($contact) {
            $contact->update($request->only(['email', 'phone', 'address']));
        } else {
            // Jika kontak tidak ditemukan, buat kontak baru
            Contact::create($request->only(['email', 'phone', 'address']));
        }

        return redirect()->route('admin.contact.index')->with('success', 'Contact updated successfully!');
    }
}
