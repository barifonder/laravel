<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Client;///
use App\Http\Requests\clientRequest;///
use Illuminate\Http\UploadedFile;//

class ClientController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function index(){
    	
    		$liste=Client::all();
    	return view('client.index',['clients'=>$liste]);

    }
    public function create(){
    	return view('client.create');
    }

     public function store(clientRequest $request){
    	$client=new Client();
    	$client->nom = $request->input('nom');
    	$client->prenom = $request->input('prenom');
    	$client->adresse = $request->input('adresse');
    	$client->ville = $request->input('ville');
    	$client->tel = $request->input('tel');

        //if($request->hasFile('photo')){
        //   $client->photo = $request->photo->store('image');
        //}
    	$client->save();
        session()->flash('succes','l client a ete ajouter avec succes !');
    	return redirect('clients');

    }

    public function show($id){
        $client=Client::find($id);
        return view('client.details',['client'=>$client]);
    }

      public function edit($id){
    	$client=Client::find($id);
    	return view('client.edit',['client'=>$client]); 
    }
    public function update(clientRequest $request, $id){

    		$client = Client::find($id);

    		$client->nom = $request->input('nom');
	    	$client->prenom = $request->input('prenom');
	    	$client->adresse = $request->input('adresse');
	    	$client->ville = $request->input('ville');
	    	$client->tel = $request->input('tel');

    		$client->save();
            session()->flash('update','l client a ete modifier avec succes !');
    		return redirect('clients');

    	
    }
    public function destroy(Request $request, $id){
        //return $request->all();
        $client=Client::find($id);
        $client->delete();
        session()->flash('delete','l client a ete supprimer avec succes !');
        return redirect('clients');

    }
}
