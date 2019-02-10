<?php

namespace App;
use App\Article;
use App\Client;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;




class Commande extends Model 
{
    use SoftDeletes;//
    protected $dates = ['deleted_at'];//

    public function client()
    {
    	return $this->belongsTo(Client::class);
    }
    
    public function article()
    {
    	return $this->belongsTo(Article::class);
    }

  
}
