<?php

namespace App\Http\Controllers;

use App\Models\Kit;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;



class KitController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kits=Kit::all();
        $categories=Category::all();
        return view ('dashboard/kits/index', compact('kits','categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categoryNames=Category::all();
        
        return view('dashboard.kits.create',compact('categoryNames'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
    

        $kits = new Kit();

        $kits->title = $request->input('title');
        $kits->description = $request->input('description');
        $kits->price = $request->input('price');
        $categoryName = $request->input('category_name');
        $category_id = $request->input('category_id');
        $kits->category_id = $category_id;


        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images'), $imageName); // Upload the image to the public/images directory
            $kits->image = $imageName;

        }

        $kits->save();

        return redirect()->route('kits.index')->with('success', 'Kit created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Kit $kit)
    {
        
    }

   
    public function edit($id)
    {
        $kits = Kit::findOrFail($id);

        return view('dashboard.kits.edit', compact('kits'));
    }

    
    public function update(Request $request, Kit $kits , $id)
    {
       
        $kits = Kit::findOrFail($id);

        $kits->title = $request->input('title');
        $kits->description = $request->input('description');
        $kits->type = $request->input('type');

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images'), $imageName); // Upload the image to the public/images directory
            $kits->image = $imageName;
            $kits->save();

        }

        $kits->save();

        return redirect()->route('kits.index')->with('success', 'Kit updated successfully');
    }

    public function destroy($id)
    {

        Kit::destroy($id);
        return back()->with('success', ' deleted successfully.');
    }
}
