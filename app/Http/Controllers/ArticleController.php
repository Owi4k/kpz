<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Redirect;
use App\Article;
use App\User;

class ArticleController extends Controller
{
    public function addArticle(Request $request)
    {
        $new_title = $request->title;
        $new_subtitle = $request->subtitle;
        $new_description = $request->description;
        $new_author = Auth::user()->id;

        Article::create(['title' => $new_title, 'subtitle' => $new_subtitle, 'text' => $new_description, 'author' => $new_author]);

        return Redirect::back();
    }

    public function showArticle($id)
    {
    	$this_article = Article::where('id', $id)->first();
    	return view('article', ['article' => $this_article]);
    }
}
