<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class AuctionController extends Controller
{
    public function store(Article $article, Request $request)
    {
        $article->auctions()->create($request->all());
        return redirect()->route('articles.show', $article);
    }
    public function create(Article $article)
    {
        return view('auctions.create', compact('article'));
    }

}