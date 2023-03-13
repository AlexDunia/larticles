<?php

namespace App\Http\Controllers;

use App\Models\articles;
use Illuminate\Http\Request;
use App\Http\Resources\articleresource as articleresources;

class articleController extends Controller
{
    //
    public function index()
    {
        // $post = Post::find($id);
        // return new articleresource($title);

        // first we paginate our model and store in a variable to enable us use it on our desired context.
        $articlevariable = articles::paginate(2);
        // next thing we need to do is to return our list of items as a collection.
        return articleresources::collection($articlevariable);
    }


    // public function show($id){
    //     $articlevariable = articles::findOrFail($id);
    //     return new articleresources($articlevariable);
    // }


    public function show($id)
{
    $articlevariable = articles::findOrFail($id);

    return view('itemdetails', ['articlevariable' => new articleresources($articlevariable)]);
}

    // Another thing worth noting is that since it is a post request then we actually need a parameter of request
    public function store(Request $request){
        // If the method is PUT, it will find the existing
        // article with the given ID using the findOrFail method and store it in the $articles variable
        $articless = $request->isMethod('put') ? articles::findOrFail($request->article_id) : new articles;
        // with the variable, we can now access the id and title of our model directly.
        // Which is what we are going to do now.
        $articless->id = $request->input('article_id');
        $articless->title = $request->input('title');
        $articless->body = $request->input('body');
        // The if statement checks whether
        // the $articles model was successfully
        // saved to the database using the save method.
        // If it was saved successfully, it creates
        // a new instance of the articleresources resource and returns it.
        if ($articless->save()) {
        return new articleresources($articless);
        // PERFECT!
    }
}
}
