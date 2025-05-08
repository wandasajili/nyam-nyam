<?php

namespace App\Http\Controllers;

use App\Models\Team;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    public function indexFe(Request $request){
        $teams = Team::all(); // atau bisa gunakan where, paginate, dsb.
        return view('team.index', compact('teams'));
       
    }

    public function index(Request $request){
        $teams = Team::get();
        return view('admin.team.index', compact('teams'));
    }

    public function create(Request $request){
        return view('admin.team.create');
    }

    public function store(Request $request){
        $request->validate([
            "name" => "required",
            "image" => "required",
            "socialmedia" => "required"
        ]);

        $imageName = time().'.'.$request->image->extension();
        $request->image->move(public_path('img'), $imageName);

        Team::create([
            "name" => $request->name,
            "image" => $imageName,
            "socialmedia" => $request->socialmedia,
        ]);
        return redirect()->route('team.index')->with('success', 'Item added succesfully');
    }

    public function edit(Request $request, $id){
        $team = Team::find($id);
        return view('admin.team.edit', compact('team'));
    }

    public function update(Request $request, $id){
      
        $request->validate([
            "name" => "required",
            "image" => "required",
            "socialmedia" => "required"
        ]);

        $imageName = time().'.'.$request->image->extension();
        $request->image->move(public_path('img'), $imageName);

        $team = Team::find($id);
        
        $team->update([
            "name" => $request->name,
            "image" => $imageName,
            "socialmedia" => $request->socialmedia,
        ]);
     
        return redirect()->route('team.index')->with('success', 'Item updated successfully');
    }

    public function destroy(Request $request, $id){
        $team = Team::findOrFail($id); // akan otomatis 404 jika tidak ada
        $team->delete();
        return redirect()->route('team.index')->with('success', 'Item deleted successfully');
    }
}
