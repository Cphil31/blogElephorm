<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $fillable=['titre','texte']; 
// Un article auras une seule catégorie
    public function categorie(){
    	return $this->BelongsTo('App/Categorie');
    }
}

