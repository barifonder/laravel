<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;///
use App\Http\Requests\articleRequest;///
use Illuminate\Http\UploadedFile;//

class ArticleController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function index(){
    	$liste=Article::all();       
    	return view('article.index',['articles'=>$liste]);

     

    }
    
    public function create(){
        $this->authorize('create', Article::class);
    	return view('article.create');
    }
    public function store(articleRequest $request){
    	$article=new Article();
    	$article->designation = $request->input('designation');
    	$article->pu = $request->input('pu');

        if($request->hasFile('photo')){
           $article->photo = $request->photo->store('image');
        }
    	$article->save();
        session()->flash('succes','l article a ete ajouter avec succes !');
    	return redirect('articles');

    }
    public function edit($id){
    	$article=Article::find($id);
    	return view('article.edit',['article'=>$article]); 
    }

    public function show($id){
        $article=Article::find($id);
        return view('article.details',['article'=>$article]);
    }

    public function update(articleRequest $request, $id){

    		$article = Article::find($id);

    		$article->designation=$request->input('designation');
    		$article->pu=$request->input('pu');
    		$article->save();
            session()->flash('update','l article a ete modifier avec succes !');
    		return redirect('articles');

    	
    }
    public function destroy($id){
    	//return $request->all();
        $article=Article::find($id);
        $article->delete();
        session()->flash('delete','l article a ete supprimer avec succes !');
        return redirect('articles');

    }
}
