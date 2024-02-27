<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CategoryController extends Controller
{ 

    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        try {

            $keyword = $request->input('keyword');

            // Query the categories table based on the keyword

            $query = Category::orderBy('id', 'ASC');

            if (!empty($keyword)) {
                $query->where('name', 'like', '%' . $keyword . '%');
            } 
         
            $data['categories'] = $query->paginate(7);
            return view('admin.categories.list', $data);
        } catch (Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $rules = [
            'name' => 'required',
        ];
        $validator = Validator::make($request->all(), $rules); 

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        try {
            $category = Category::create([
                'name' => $request->name,
            ]);
           

            //  the  Create
            if (isset($category->id)) {
                return redirect()->route('categories.index')->with('success', 'Category  Created successfully');
            } else {
                return redirect()->back()->with('error', 'Something went wrong!');
            }
        } catch (Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request)
    {
        try {

            $data['category'] = Category::find($request->id); 
            if (!empty($data['category'])) {
                return view('admin.categories.edit', $data);
            }
            return redirect()->route("categories.index")->with('error', 'Category  not found!');
        } catch (Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $rules = [
            'name' => 'required',
        ];
        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        try {
            // Find the category by its ID
            $category = Category::find($id);

            if (!$category) {
                return redirect()->back()->with('error', 'Category not found.');
            }

            // Update the category's name
            $category->name = $request->name;
            $category->save();
 

            return redirect()->route('categories.index')->with('success', 'Category updated successfully');
        } catch (Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // Find the category by its ID
        $category = Category::find($id);

        if (!$category) {
            return redirect()->route('categories.index')->with('error', 'Category not found');
        }
        // Delete the category

        try {

            $category->delete();
            return redirect()->route('categories.index')->with('success', 'Category  deleted successfully');
        } catch (Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }
}
