<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Citaton extends Model
{
    use HasFactory;
    public function researchPaper()
    {
        return $this->belongsTo(Post::class);
    }
}
