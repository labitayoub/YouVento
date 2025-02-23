<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Club;

class ClubController extends Controller
{
    public function index()
{
    $posts = Club::all();
    return view('posts.index', compact('clubs'));
}
public function create()
{
    return view('clubs.create');
}
public function store(Request $request)
{
    $request->validate([
        'name' => 'required',
        'description' => 'required',
        'category' => 'required'
    ]);
    Club::create($request->all());
    return redirect()->route('clubs.index');

}

public function show($id)
{
    $club = Club::find($id);
    return view('clubs.show', compact('club'));

}
public function edit($id)
{
    $club = Club::find($id);
    return view('clubs.edit', compact('club'));
}
public function update(Request $request, $id)
{
    $request->validate([
        'name' => 'required',
        'description' => 'required',
        'category' => 'required'
    ]);
    $club = Club::find($id);
    $club->name = $request->get('name');
    $club->description = $request->get('description');
    $club->category = $request->get('category');
    $club->save();
    return redirect()->route('clubs.index');
}
public function destroy($id)
{
    $club = Club::find($id);
    $club->delete();
    return redirect()->route('clubs.index');
}
}