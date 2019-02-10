<?php

namespace App\Http\Controllers;

use App\Client;
use App\Commande;
use App\Http\Requests\infoRequest;
use App\Info;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;//

class InfoController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function index(){
    	
    		$liste=Info::all();
    	return view('info.index',['infos'=>$liste]);

    }
    public function create(){
    	$clients= Client::all();
    	return view('info.create',['clients'=>$clients]);
    }

     public function store(infoRequest $request){
    	$info=new Info();
    	$info->client_id = $request->input('client_id');
    	$info->nom = $request->input('nom');
    	$info->prenom = $request->input('prenom');
    	$info->adresse = $request->input('adresse');


        //if($request->hasFile('photo')){
        //   $client->photo = $request->photo->store('image');
        //}
    	$info->save();
        session()->flash('succes','l info a ete ajouter avec succes !');
    	return redirect('infos');

    }

    public function show($id){
        $infos=Info::find($id);
        return view('info.details',['id'=>$infos->id]);
    }

      public function edit($id){
      	$clients= Client::all();
    	$info=Info::find($id);
    	return view('info.edit',['infos'=>$info],['clients'=>$clients]); 
    }
    public function update(infoRequest $request, $id){

    		$info = Info::find($id);

			$info->client_id = $request->input('client_id');
	    	$info->nom = $request->input('nom');
	    	$info->prenom = $request->input('prenom');
	    	$info->adresse = $request->input('adresse');

    		$info->save();
            session()->flash('update','l info a ete modifier avec succes !');
    		return redirect('infos');

    	
    }
    public function destroy(Request $request, $id){
        //return $request->all();
        $info=Info::find($id);
        $info->delete();
        session()->flash('delete','l info a ete supprimer avec succes !');
        return redirect('infos');

    }

    public function getInfos($id)
    {
    	$infos = Info::find($id);
    	return $infos;
    }
}
