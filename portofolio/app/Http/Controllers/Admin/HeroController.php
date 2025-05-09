<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Hero;

class HeroController extends Controller
{
    public function index()
    {
        $hero = Hero::first();
        return view('admin.hero.index', compact('hero'));
    }

    public function edit()
    {
        $hero = Hero::first();
        return view('admin.hero.edit', compact('hero'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'headline' => 'required|string|max:255',
            'subheadline' => 'required|string|max:255',
            'background_image' => 'required|string',
        ]);

        $hero = Hero::first();

        $data = $request->only('name', 'headline', 'subheadline', 'background_image');

        if ($hero) {
            $hero->update($data);
        } else {
            Hero::create($data);
        }

        return redirect()->route('admin.hero.index')->with('success', 'Data Hero berhasil diperbarui.');
    }
}
