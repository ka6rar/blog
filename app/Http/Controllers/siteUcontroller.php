<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\User;
use App\Tag;
use DB;
use App\Category;
class siteUcontroller extends Controller
{

    public function showPost($slug) {
        $post      = Post::where('slug' , $slug)->first();
        $next_page = Post::where('id' , '>' ,$post->id)->min('id');
       $prev_page = Post::where('id' , '<' ,$post->id)->max('id');

        return view('post.show')
                            ->with('tags'    , Tag::all())
                            ->with('post' , $post )
                            ->with('title' ,$post->title )
                            ->with('categories', Category::all())
                             ->with('next'  , Post::find($next_page))
                             ->with('prev'  , Post::find($prev_page));



    }






public function index() {
    return view('index')->with('posts' , Category::all())
    ->with('users' , DB::table('users')->count())
    ->with('pos' , DB::table('posts')->count())
    ->with('categories' , DB::table('categories')->count())
    ->with('po' , Post::all())->with('categories', Category::all());
}



public function category($id) {


  $category = Category::find($id);

    return view('category.category' )

                        ->with('categories'  , Category::all())
                        ->with('po'          , Post::all())
                        ->with('name'        , $category->name)
                        ->with('category'    , $category );





}

public function tags($id) {


    $tag = Tag::find($id);

      return view('tags.tags' )

                          ->with('categories'  , Category::all())
                          ->with('po'          , Post::all())
                          ->with('tags'        , Tag::all())
                          ->with('tag'    , $tag );





  }
}

