<?php

namespace LaraDex;

use Illuminate\Database\Eloquent\Model;

class Trainer extends Model
{
    protected $fillable = ['name', 'description', 'avatar']; //asi indicamos los atributos q vamos a poder actualizar 
    /**
     * Get the route key for the model.
     *
     * @return string
     */
    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function pokemons(){
        return $this->hasMany('LaraDex\Pokemon');
    }
}
