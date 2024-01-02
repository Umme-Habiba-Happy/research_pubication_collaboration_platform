<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Researcher extends Model
{
    use HasFactory;
    protected $guarded =[];

    public function posts()
    {
        return $this->hasMany(Post::class);
    }

    public function references()
    {
        return $this->hasMany(Reference::class, 'referenced_researcher_id');
    } 
}
