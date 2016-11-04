<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Requests\ArticleRequest;
use App\Article;
class ArticlesController extends Controller
{
    public function index(Request $request)
    {
    	$articles = Article::all();

        if(request()->isMethod("Get"))
        {
        return $articles;   
        }
        else
        {
            return view('articles/index', compact('articles'));
        }

    }
    public function create()
    {
        $articles = new Article();
      
        return view('articles.store', compact('articles'));
    }


    public function store(ArticleRequest $request)
    {
        $articles = Article::create($request->all());

        if(Request::wantsJson())
        {
        
    	return $articles;	
    	}
    	else 
    	{
    		return redirect('articles'); 
    	}		
   
    }

        

    public function show(ArticleRequest $article)
    {
    	if(Request::wantsJson())
    	{
    	return $articles;	
    	}
    	else
    	{
    		return view('articles/show', compact('article')); 
    	}
    }

     public function edit(Article $article)
    {
    	$articles = new Article;
    	return view('articles/edit', compact('article'));
    }


    public function update(ArticleRequest $request, Article $article)
    {
       $articles->update($request->all());
    	if(Request::wantsJson())
    	{
    	return $articles;	
    	}
    	else
    	{
    		return redirect('articles');  
    	}
    }

    public function destroy(Article $article)
    {
       $deleted->articles->delete();
    	if(Request::wantsJson())
    	{
    	return (string) $deleted;	
    	}
    	else
    	{
    		return redirect('articles');  
    	}
    }

    public function Menu()
    {
        return view('menu');
    }
    	

    		
   
}

    		
   
    	

