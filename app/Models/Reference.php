<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reference extends Model
{
    use HasFactory;
    protected $guarded =[];

    public function post()
    {
        return $this->belongsTo(Post::class);
    }

    public function referencedResearcher()
    {
        return $this->belongsTo(Researcher::class, 'referenced_researcher_id');
    }

}
