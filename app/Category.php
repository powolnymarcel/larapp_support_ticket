<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['name'];

    //Un catégorie peut avoir plusieur tickets
    public function tickets()
    {
        return $this->hasMany(Ticket::class);
    }

}
