<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Notebook extends Model
{
    protected $fillable=['name'];

    public function user()
    {
    	return $this->belongsTo(User::class);
    }

    public function notes()
    {
    	return $this->hasMany(Note::class);
    }
}
