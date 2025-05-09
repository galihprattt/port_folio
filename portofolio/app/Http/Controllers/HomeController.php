<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Resume;
use App\Models\Skill;
use App\Models\Project;
use App\Models\Hero;
use App\Models\Contact;
use App\Models\Home;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $about = About::first();
        $resumes = Resume::all();
        $skills = Skill::all();
        $projects = Project::all();
        $hero = Hero::first();
        $contact = Contact::first();
        $home = Home::first();

        $resume_section = (object)[
            'description' => 'Ringkasan pengalaman dan pendidikan saya.'
        ];

        $summary = (object)[
            'name' => 'John Doe',
            'description' => 'Saya seorang web developer berpengalaman.',
            'address' => 'Jakarta, Indonesia',
            'phone' => '+62 812 3456 7890',
            'email' => 'john.doe@example.com'
        ];

        return view('home', compact(
            'about',
            'resumes',
            'skills',
            'projects',
            'hero',
            'contact',
            'home',
            'resume_section',
            'summary'
        ));
    }

    // ✅ Tambahkan method edit
    public function edit()
    {
        $home = Home::first();
        return view('admin.home.edit', compact('home'));
    }

    // ✅ Tambahkan method update
    public function update(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'subtitle' => 'required|string|max:255',
            'hero_image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $home = Home::first();

        $data = $request->only(['title', 'subtitle']);

        if ($request->hasFile('hero_image')) {
            // Hapus gambar lama jika ada
            if ($home->hero_image) {
                \Storage::disk('public')->delete($home->hero_image);
            }

            $data['hero_image'] = $request->file('hero_image')->store('homes', 'public');
        }

        $home->update($data);

        return redirect()->back()->with('success', 'Home berhasil diperbarui.');
    }
}
