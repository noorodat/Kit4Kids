<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;



class categoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories=Category::all();
        return view ('dashboard/categories/index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.categories.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,jfif |max:2048',
            // Add any desired image validation rules
            'email' => 'required|email|unique:users',
            'password' => [
                'required',
                'min:8',
                'regex:/^(?=.*[A-Z])(?=.*[a-z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]+$/'
            ]
        ]);

        $categories = new Category();

        $categories->name = $request->input('name');
        $categories->email = $request->input('email');
        $categories->password = Hash::make ($request->input('password'));

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images'), $imageName); // Upload the image to the public/images directory
            $categories->image = $imageName;
            // $storedPath = $uploadedFile->store('public/photo');
            $categories->save();

        }

        $categories->save();

        return redirect()->route('categories.index')->with('success', 'category created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        
    }

   
    public function edit($id)
    {
        $categories = Category::findOrFail($id);

        return view('dashboard.categories.edit', compact('categories'));
    }

    
    public function update(Request $request, Category $categories , $id)
    {
        $request->validate([
            'name' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,jfif |max:2048',
            'email' => 'required|email|unique:users',
            'password' => [
                'required',
                'min:8',
                'regex:/^(?=.*[A-Z])(?=.*[a-z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]+$/'
            ]
        ]);

        $categories = Category::findOrFail($id);



        $categories->name = $request->input('name');
        $categories->email = $request->input('email');
        $categories->password = Hash::make ($request->input('password'));

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images'), $imageName); // Upload the image to the public/images directory
            $categories->image = $imageName;
            $categories->save();

        }

        $categories->save();

        return redirect()->route('categorys.index')->with('success', 'category updated successfully');
    }

    public function destroy($id)
    {

        Category::destroy($id);
    return back()->with('success', ' deleted successfully.');
    }
}
