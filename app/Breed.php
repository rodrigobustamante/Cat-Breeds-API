<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Breed extends Model
{
    protected $fillable = [
    	'breed', 'country', 'origin', 'coat', 'pattern'
    ]; 
}
