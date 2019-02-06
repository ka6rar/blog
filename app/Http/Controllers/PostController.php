<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Post;
use App\Tag;
class PostController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('post.index')->with('posts' , Post::all());

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('post.create')->with('cat' , Category::all())->with('tags' , Tag::all());
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate ($request ,[
            'title' => 'required',
            'category_id' => 'required',

        ]);

        $featrued = $request->featrued;
        $featrued_new_nam = time() . $featrued->getClientOriginalName();
        $featrued->move('uplode/posts/', $featrued_new_nam);

        $post = Post::create([
            'title' => $request->title,
            'content' => $request->content,
            'category_id' => $request->category_id,
            'featrued' => 'uplode/posts/'. $featrued_new_nam,
            'slug' => str_slug($request->title),
        ]);

        $post->tags()->attach($request->tag);  //عملية الربط

         return redirect()->back();
       }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       $posts = Post::find($id);
       return view('post.edit' , compact('posts'))->with('cat', Category::all())->with('tags' , Tag::all());
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $post = Post::find($id);

        $this->validate($request, [
        'title' => 'required',
        'content' => 'required',
        'category_id' => 'required',
        ]);




        if ($request->featrued) {
            $featrued = $request->featrued;
            $featrued_new_nam = time() . $featrued->getClientOriginalName();
            $featrued->move('uplode/posts/', $featrued_new_nam);

            $post->featrued = $featrued_new_nam;
        }
        $post->title       =   $request->title;
        $post->content     = $request->content;
        $post->category_id = $request->category_id;

        $post->save();

        $post->tags()->sync($request->tags);

       return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
    $post = Post::find($id);
    $post->delete();
    return redirect()->back();

    }

    public function deletesofte() {

        $posts =Post::onlyTrashed()->get();

       return view('post.deletesofte' )->with('posts' , $posts);
}

    public function hdelete($id) {  //حذف البوست نهاين

        $post =Post::withTrashed()->where('id' , $id)->first();
        $post->forceDelete();
        return redirect()->back();
    }

    public function restore($id) {  //استرجاع المحدذوف
        $post =Post::withTrashed()->where('id' , $id)->first();
        $post->restore();
        return redirect()->back();
    }
}
