<?php

namespace App\Models;

use App\Models\User;
use App\Models\Listing;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Song extends Model
{
    use HasFactory;


    public function scopeFilter($query, array $filters) {
        if($filters['artist'] ?? false) {
            $query->where('artist', 'like', '%' . request('artist') . '%');
        }

        if($filters['search'] ?? false) {
            $query->where('artist', 'like', '%' . 
            request('search') . '%')
            ->orWhere('name', 'like', '%' . 
            request('search') . '%');
        }


    }

    public function user() {
        return $this->belongsTo(User::class, 'user_id');
    }
    public function listing() {
        return $this->belongsTo(Listing::class, 'playlist_id');
    }
}
