<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Resume;

class ResumeController extends Controller
{
    public function index()
    {
        $resumes = Resume::all();
        return view('admin.resume.index', compact('resumes'));
    }

    public function create()
    {
        return view('admin.resume.create');
    }

    public function store(Request $request)
    {
        Resume::create($request->validate([
            'type' => 'required',
            'title' => 'required',
            'sub_title' => 'nullable',
            'description' => 'nullable',
            'year' => 'nullable',
        ]));

        return redirect()->route('admin.resume.index')->with('success', 'Data berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $resume = Resume::findOrFail($id);
        return view('admin.resume.edit', compact('resume'));
    }

    public function update(Request $request, $id)
    {
        $resume = Resume::findOrFail($id);
        $resume->update($request->validate([
            'type' => 'required',
            'title' => 'required',
            'sub_title' => 'nullable',
            'description' => 'nullable',
            'year' => 'nullable',
        ]));

        return redirect()->route('admin.resume.index')->with('success', 'Data berhasil diupdate.');
    }

    public function destroy($id)
    {
        Resume::findOrFail($id)->delete();
        return redirect()->route('admin.resume.index')->with('success', 'Data berhasil dihapus.');
    }
}
