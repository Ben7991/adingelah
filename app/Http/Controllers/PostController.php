<?php

namespace App\Http\Controllers;

use App\Constant\ImagePath;
use App\Constant\SubmitOutcome;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index() {
        $posts = Post::get();
        return view("posts.index", ["posts" => $posts]);
    }



    public function create() {
        return view("posts.create");
    }




    public function edit($id) {
        try
        {
            $post = Post::findOrFail($id);
            return view("posts.edit", ["post" => $post]);
        }
        catch (\Exception $e)
        {
            return redirect()
                ->route("posts.index")
                ->with(SubmitOutcome::$FAILED, "Post not found");
        }
    }




    public function store(Request $request){
        $request->validate([
           "title" => "required|min:3",
           "banner" => "required|mimes:jpg,png,jpeg,gif,svg|max:2048",
           "description" => "required|min:10"
        ]);

        try
        {
            $bannerName = $this->generateFileName();

            $post = new Post();
            $post->title = $request->title;
            $post->banner = $bannerName;
            $post->description = $request->description;

            $post->save();

            // save the image to the public folder
            request()->banner->move(public_path(ImagePath::$post), $bannerName);

            return redirect()
                ->route("posts.index")
                ->with(SubmitOutcome::$SUCCESS, "new post is created successfully");
        }
        catch (\Exception $e)
        {
            return redirect()
                ->route("posts.create")
                ->with(SubmitOutcome::$FAILED, "post creation failed, try again");
        }


    }




    public function update(Request $request, Post $post){
        $request->validate([
            "title" => "required|min:3",
            "description" => "required|min:10"
        ]);


        // validate the image if it's has content
        if($request->banner != null)
        {
            $request->validate(["banner" => "required|mimes:jpg,png,jpeg,gif,svg|max:2048"]);
        }

        try
        {
            $bannerName = ($request->banner != null) ? $this->generateFileName()  : $post->banner;

            if($request->banner != null)
            {
                unlink(ImagePath::$post . $post->banner);
                request()->banner->move(public_path(ImagePath::$post), $bannerName);
            }

            $post->title = $request->title;
            $post->banner = $bannerName;
            $post->description = $request->description;
            $post->save();

            return redirect()
                ->route("posts.index")
                ->with(SubmitOutcome::$SUCCESS, "Post has been updated successfully");
        }
        catch(\Exception $e)
        {

            return redirect()
                ->route("posts.index")
                ->with(SubmitOutcome::$FAILED, "Post update failed, try again");
        }
    }




    public  function destroy($id){
        try
        {
            $post = Post::findOrFail($id);
            $post->delete();

            return redirect()
                ->route("posts.index")
                ->with(SubmitOutcome::$SUCCESS, "Post has been deleted successfully");
        }
        catch(\Exception $e)
        {
            return redirect()
                ->route("posts.index")
                ->with(SubmitOutcome::$FAILED, "Post deletion failed, try again");
        }
    }



    private function generateFileName() : string
    {
        return time() . '.' . request()->banner->getClientOriginalExtension();
    }
}
