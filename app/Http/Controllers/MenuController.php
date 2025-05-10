<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function indexFe(Request $request){
        $menus = Menu::all(); // atau bisa gunakan where, paginate, dsb.
        return view('menu.index', compact('menus'));
       
    }

    public function index(Request $request){
        $menus = Menu::get();
        return view('admin.menu.index', compact('menus'));
    }

    public function create(Request $request){
        return view('admin.menu.create');
    }

    public function store(Request $request){
        $request->validate([
            "name" => "required",
            "description" => "required",
            "price" => "required",
            "stock" => "required",
            "image" => "required"
        ]);

        $imageName = time().'.'.$request->image->extension();
        $request->image->move(public_path('img'), $imageName);

        Menu::create([
            "name" => $request->name,
            "description" => $request->description,
            "price" => $request->price,
            "stock" => $request->stock,
            "image" => $imageName
        ]);
        return redirect()->route('menu.index')->with('success', 'Item added succesfully');
    }

    public function edit(Request $request, $id){
        $menu = Menu::find($id);
        return view('admin.menu.edit', compact('menu'));
    }

    public function update(Request $request, $id){
      
        $request->validate([
            "name" => "required",
            "description" => "required",
            "price" => "required",
            "stock" => "required",
            "image" => "required"
        ]);

        $imageName = time().'.'.$request->image->extension();
        $request->image->move(public_path('img'), $imageName);

        $menu = Menu::find($id);
        
        $menu->update([
            "name" => $request->name,
            "description" => $request->description,
            "price" => $request->price,
            "stock" => $request->stock,
            "image" => $imageName
        ]);
     
        return redirect()->route('menu.index')->with('success', 'Item updated successfully');
    }

    public function destroy(Request $request, $id){
        $menu = Menu::findOrFail($id); // akan otomatis 404 jika tidak ada
        $menu->delete();
        return redirect()->route('menu.index')->with('success', 'Item deleted successfully');
    }
}
