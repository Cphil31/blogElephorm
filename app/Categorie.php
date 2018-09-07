<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
    protected $fillable=['titre_categories'];

    public function blogposts(){
    	return $this->hasMany('App/Blog');
    }
}
