<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Validation\Rule;

class ListingController extends Controller
{

    //show all Listing
    public function home() {
        return view('listings.index', [
            'listings' => Listing::latest()->filter
            (request(['artist', 'search']))->simplepaginate(4)
         ]);
    }



    //show all Listing
    public function index() {
        return view('listings.index', [
            'listings' => Listing::latest()->filter
            (request(['artist', 'search']))->simplepaginate(4)
         ]);
    }

    //Show single listing
    public function show(Listing $listing ){
        return view('listings.show', [
            'listing' => $listing
        ]);
    }
    //create form
    public function create(){
        return view('listings.create');
    }


    

        //store form
        public function store(Request $request){
            $form = $request->validate([
                'title' => 'required',
            ]);

            if($request->hasFile('logo')) {
                $form['logo'] = $request->file('logo')->
                store('logos', 'public');
            }

            $form['user_id'] = auth()->id();

            Listing::create($form);


            return redirect('/')->with('message', 'Listing Created
            successfully!');
        }

        //show Edit form

        public function edit(Listing $listing) {
            return view('listings.edit', ['listing' => $listing]);
        }


        //update form
        public function update(Request $request, Listing $listing){
                
            //Make sure logged in user is owner

            if($listing->user_id != auth()->id()) {
                abort(403, 'Unauthorized Action');
            }
            
            $form = $request->validate([
                'title' => 'required',

            ]);

            if($request->hasFile('logo')) {
                $form['logo'] = $request->file('logo')->store('logos', 'public');
            }

            $listing->update($form);


            return back()->with('message', 'Listing Updated
            successfully!');
        }

        //Delete Listing
        public function delete(Listing $listing) {
                       //Make sure logged in user is owner

                       if($listing->user_id != auth()->id()) {
                        abort(403, 'Unauthorized Action');
                    }
           
            $listing->delete();

            return redirect('/')->with('message', 'Listing deleted Successfully');
        }

        //Manage Listing 
        public function manage() {
            return view('listings.manage', [
                'listings' => auth()->user()->listing()->get()
            ]);
        }
}
