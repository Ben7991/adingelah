<?php

namespace App\Http\Controllers;

use App\Constant\SubmitOutcome;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index() {
        $categories = Category::get();
        return view("categories.index", ["categories" => $categories]);
    }



    public function store(Request $request){
        $request->validate([
            "name" => "required|min:3"
        ]);

        $category = new Category();
        $category->name = $request->name;
        $category->status = "visible";

        $category->save();

        return redirect()
            ->route("categories.index")
            ->with("success", "new category was created successfully");
    }



    public function create() {
        return view("categories.create");
    }



    public function edit($id) {
        try
        {
            $category = Category::findOrFail($id);
            return view("categories.edit", ["category" => $category]);
        }
        catch (\Exception $e)
        {
            return redirect()
                ->route("categories.index")
                ->with(SubmitOutcome::$FAILED, "category not found");
        }
    }



    public function update(Request $request, Category $category){
        $request->validate([
            "name" => "required|min:3",
            "status" => "required"
        ]);

        $category->name = $request->name;
        $category->status = $request->status;
        $category->save();

        return redirect()
            ->route("categories.index")
            ->with(SubmitOutcome::$SUCCESS, "Record update was successfully");

    }



    public function destroy($id){
        try
        {
            $category = Category::findOrFail($id);

            $category->delete();

            return redirect()
                ->route("categories.index")
                ->with(SubmitOutcome::$SUCCESS, "Record deleted successfully");
        }
        catch(\Exception $e){
            return redirect()
                ->route("categories.index")
                ->with(SubmitOutcome::$FAILED, "Record deletion failed!");
        }

    }

}
