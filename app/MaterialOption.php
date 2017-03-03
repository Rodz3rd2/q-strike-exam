<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MaterialOption extends Model
{
    protected $table = "material_options";

    public function materialOptions ()
    {
        return $this->belongsTo("App\Material");
    }

    public function getId ()
    {
        return $this->id;
    }

    public function getMaterialId ()
    {
    	return $this->MaterialId;
    }

    public function getName ()
    {
    	return $this->Name;
    }
}
