<?php

namespace App\Http\Controllers;

use App\Models\Club;
use Illuminate\Http\Request;

class ClubController extends Controller
{
    public function index()
    {
        $clubs= Club::all();
        return view('clubs.index', compact('clubs'));
    }

    public function create()
    {
        return view('>clubs.create');
    }

    public function store(Request $request)
    {
        $request->validate([

            'name' => 'required',
            'description' => 'required',
            'category' => 'required',
        ]);

        Club::create($request->all());
        return redirect()->route('clubs.index')->with('success', 'Club ajouté');
    }

    public function show(Club $Club)
    {
        return view('clubs.show', compact('Club'));
    }

    public function edit(Club $Club)
    {
        return view('clubs.edit', compact('Club'));
    }

    public function update(Request $request, Club $Club)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'category' => 'required',
        ]);

        $Club->update($request->all());
        return redirect()->route('clubs.index')->with('success', 'Club mis à jour');
    }

    public function destroy(Club $Club)
    {
        $Club->delete();
        return redirect()->route('clubs.index')->with('success', 'Club supprimé');
    }
}
