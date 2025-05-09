<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Skill;
use Illuminate\Http\Request;

class SkillController extends Controller
{
    public function index()
    {
        $skills = Skill::all();
        return view('admin.skill.index', compact('skills'));
    }

    public function create()
    {
        return view('admin.skill.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'level' => 'required|integer|min:0|max:100',
        ]);

        Skill::create($request->only(['name', 'level']));

        return redirect()->route('admin.skill.index')->with('success', 'Skill berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $skill = Skill::findOrFail($id);
        return view('admin.skill.edit', compact('skill'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'level' => 'required|integer|min:0|max:100',
        ]);

        $skill = Skill::findOrFail($id);
        $skill->update($request->only(['name', 'level']));

        return redirect()->route('admin.skill.index')->with('success', 'Skill berhasil diperbarui.');
    }

    public function destroy($id)
    {
        Skill::findOrFail($id)->delete();
        return redirect()->route('admin.skill.index')->with('success', 'Skill berhasil dihapus.');
    }
}
