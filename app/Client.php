<?php

namespace App;
use App\Commande;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Client extends Model
{
    use SoftDeletes;//
    protected $dates = ['deleted_at'];//

    
    
}
