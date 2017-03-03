<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Material extends Model
{
    protected $table = "materials";

    public function materialOptions ()
    {
        return $this->hasMany("App\MaterialOption", "MaterialId");
    }

    public function getId ()
    {
        return $this->id;
    }

    public function getName ()
    {
    	return $this->Name;
    }

    public function getSport ()
    {
    	return $this->Sport;
    }

    public function getImage ()
    {
    	return $this->Image;
    }
}
