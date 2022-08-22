<?php

namespace App\Http\Controllers;

use App\Models\Song;
use App\Models\Listing;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SongController extends Controller
{
    public function index(Listing $song) {
        return view('songs.index', [
            'songs' => Song::where('playlist_id', $song->id)->get(),
         ]);
    }

     //Show single listing
     public function show(Song $song ){
        return view('songs.show', [
            'song' => $song
        ]);
    }
    //create form
    public function create(){
        return view('songs.create');
    }

     //store form
     public function store(Request $request, Listing $id){
        $form = $request->validate([
            'name' => 'required',
            'artist' =>'required',
             'album' => 'required',
             'genre' => 'required',
        ]);

        if($request->hasFile('logo')) {
            $form['logo'] = $request->file('logo')->
            store('logos', 'public');
        }

        if($request->hasFile('audio')) {
            $form['audio'] = $request->file('audio')->
            store('audio', 'public');
        }
        $post = DB::table('listings')
             ->select('id')->where('user_id', auth()->id())->latest()->first();
        // $post->id;
        
        $query =$post->id;
        $form['playlist_id'] = $query;


        // $project = Project::find($project_id); // $project_id is transmitted over the URL

        // $comment = new Note; // I'd alias Note as 'Comment', or rename '$comment' to '$note' because this can be confusing in the future
        // $comment->project_id = $project->id;
        // ddd($form);
        Song::create($form);


        return redirect('/')->with('message', 'Song Added
        successfully!');
    }

            //show Edit form

            public function edit(Song $song) {
                return view('songs.edit', ['song' => $song]);
            }
    
    
            //update form
            public function update(Request $request, Song $song){
                    
                //Make sure logged in user is owner
    
                if($song->playlist_id != $song->listing['id']) {
                    abort(403, 'Unauthorized Action');
                }
                
                $form = $request->validate([
                    'name' => 'required',
                    'artist' => 'required',
                    'album' => 'required',
                    'genre' => 'required',    
                ]);
    
                if($request->hasFile('logo')) {
                    $form['logo'] = $request->file('logo')->store('logos', 'public');
                }
                elseif($request->hasFile('audio')) {
                    $form['audio'] = $request->file('audio')->store('aud', 'public');
                }
    
                $song->update($form);
    
    
                return back()->with('message', 'Songs Updated
                successfully!');
            }
    
            //Delete Listing
            public function delete(Song $song) {
                           //Make sure logged in user is owner
    
                           if($song->listing['user_id'] != auth()->id()) {
                            abort(403, 'Unauthorized Action');
                        }
               
                $song->delete();
    
                return redirect('/')->with('message', 'Song deleted Successfully');
            }
    
            // Manage Listing 
            public function manage(Song $song) {
                return view('songs.manage', [
                    $post = DB::table('listings')
                    ->select('id')->where('user_id', auth()->id())->first(),
               
                    $query =$post->id,
                     $item = DB::table('songs')
                    ->select('id', 'playlist_id', 'name', 'artist', 'album', 'genre', 'logo', 'audio')
                    ->where('playlist_id', $query)->get(),
                    // dd($item),
                    'songs' => $item
                ]);
            }

}
