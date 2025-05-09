<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\About;
use Illuminate\Support\Facades\Storage;

class AboutController extends Controller
{
    public function index()
    {
        $about = About::first();
        return view('admin.about.index', compact('about'));
    }

    public function edit()
    {
        $about = About::first();
        return view('admin.about.edit', compact('about'));
    }

    public function update(Request $request)
    {
        $validated = $request->validate([
            'description' => 'nullable|string',
            'birthday' => 'nullable|string',
            'website' => 'nullable|string',
            'phone' => 'nullable|string',
            'city' => 'nullable|string',
            'age' => 'nullable|string',
            'degree' => 'nullable|string',
            'email' => 'nullable|email',
            'freelance' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $about = About::first();

        // ✅ Tangani upload gambar
        if ($request->hasFile('image')) {
            if ($about->profile_image) {
                Storage::disk('public')->delete($about->profile_image);
            }
            $validated['profile_image'] = $request->file('image')->store('abouts', 'public');
        }

        $about->update($validated);

        return redirect()->route('admin.about.index')->with('success', 'About berhasil diperbarui.');
    }
}
