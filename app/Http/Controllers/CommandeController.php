<?php

namespace App\Http\Controllers;


use App\Article;
use App\Client;
use App\Commande;
use App\Http\Requests\commandeRequest;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;

class CommandeController extends Controller
{
  public function __construct(){
        $this->middleware('auth');
    }

    public function index(){
    	
    	$commandes=Commande::all();      
              
    	return view('commande.index',['commandes'=>$commandes]);

        
       

    }
    public function create(){
    	$articles=Article::all();
    	$clients=Client::all();
    	return view('commande.create',['articles'=>$articles],['clients'=>$clients]);
    }

     public function store(commandeRequest $request){
    	$commande=new Commande();
    	$commande->article_id = $request->input('article_id');
    	$commande->client_id = $request->input('client_id');
    	

        //if($request->hasFile('photo')){
        //   $client->photo = $request->photo->store('image');
        //}
    	$commande->save();
        session()->flash('succes','l coomande a ete ajouter avec succes !');
    	return redirect('commandes');

    }

    public function show($id){
        $commande=Commande::find($id);
        return view('commande.details',['commande'=>$commande]);
    }

      public function edit($id){
    	$commande=Commande::find($id);   
    	$articles=Article::all();
    	$clients=Client::all(); 	
    	return view('commande.edit',['commande'=>$commande,'articles'=>$articles,'clients'=>$clients]); 
    }
    public function update(commandeRequest $request, $id){

    		$commande = Commande::find($id);

    		$commande->article_id = $request->input('article_id');
	    	$commande->client_id = $request->input('client_id');
	    

    		$commande->save();
            session()->flash('update','l commande a ete modifier avec succes !');
    		return redirect('commandes');

    	
    }
    public function destroy(Request $request, $id){
        //return $request->all();
        $commande=Commande::find($id);
        $commande->delete();
        session()->flash('delete','l commande a ete supprimer avec succes !');
        return redirect('commandes');

    }
}
