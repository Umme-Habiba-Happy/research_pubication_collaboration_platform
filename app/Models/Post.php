<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $guarded =[]; 
    // protected $fillable = [
    //     'title',
    //     'description',
    //     'author_name',
    //     'author_affiliation',
    //     'coauthor_name',
    //     'coauthor_affiliation',
    //     'doi',
    //     'reference',
    //     'researcher_id',
    //     'category_id',
    //     'file',
    //     'citation_count',
    //     // Add other fields as needed...
    // ];
   

    public function incrementCitationCount()
{
    $this->increment('citation_count');
}

    public function category()
    {
        return $this->belongsTo(Category::class, "category_id", "id");
    }
    public function user()
    {
        return $this->belongsTo(User::class, "researcher_id", "id");
    }
 
    public function comments()
{
    return $this->hasMany(Comment::class, 'post_id');
}

    public function researcher()
    {
        return $this->belongsTo(Researcher::class, 'researcher_id');
    }

    public function references()
    {
        return $this->hasMany(Reference::class);
    }


}
