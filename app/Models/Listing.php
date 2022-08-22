<?php

namespace App\Models;

use App\Models\Song;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Listing extends Model
{
    use HasFactory;

    // protected $fillable = ['title', 'label', 'genre', 
    // 'email', 'website', 
    // 'artist', 'description'];
   
    // protected $fillable = [
    //     'id',
    //     'title',
    //     'logo',
    // ];
   
    protected $table = "listings";

    protected $primaryKey = 'id';

    public function scopeFilter($query, array $filters) {
        if($filters['title'] ?? false) {
            $query->where('title', 'like', '%' . request('title') . '%');
        }

        if($filters['search'] ?? false) {
            $query->where('title', 'like', '%' . 
            request('search') . '%');
        }


    }

    //Relationship To User

    public function user() {
        return $this->belongsTo(User::class, 'user_id');
    }

        //Relationship with Songs
        public function song() {
            return $this->hasMany(Song::class, 'playlist_id');
        }
}
