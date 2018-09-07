<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
	// je n'ai pas besoin de temps quand je choisi la catégorie
	public $timestamps = false;
    protected $fillable=['titre_categories'];
// une catégorie auras plusierus articles 
    public function blogposts(){
    	return $this->hasMany('App/Blog');
    }
}
