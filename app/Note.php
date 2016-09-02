<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    protected $fillable=['title','body'];

    public function notebook()
    {
    	return $this->belongsTo(Notebook::class);
    }
    
}
