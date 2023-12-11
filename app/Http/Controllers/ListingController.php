<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Session;

class ListingController extends Controller
{
    // Show all listings
    public function index() {
        return view('listings.index', [
            'listings' => Listing::latest()->filter(request(['tag', 'search']))->simplePaginate(12)
        ]);
    }

    //Show manage listings page
    public function manage(){
        return view('listings.manage', [ 'listings'=> auth()->user()->listings()->get()]);
    }

    //Show single listing
    public function show(Listing $listing){
        return view('listings.show', [ 'listing'=> $listing]);
    }

    //Show create form
    public function create(){
        return view('listings.create');
    }

    //Show edit form
    public function edit(Listing $listing){
        return view('listings.edit', ['listing'=>$listing]);
    }

    //Destroy listing
    public function destroy(Listing $listing){
        // Check logged in user is owner

        if($listing->iser_id != auth()->id()){
            abort(403, "Unauthorised action");
        }
        
        $listing->delete();
        return redirect('/')->with('message', 'Listing Deleted Successfully!');
    }

    //Update listing data from form
    public function update(Request $request, Listing $listing){

        // Check logged in user is owner

        if($listing->iser_id != auth()->id()){
            abort(403, "Unauthorised action");
        }

        if ($request["website"] == ""){

            $formFields = $request->validate([
                'title' => 'required',
                'company_name' => 'required',
                'location' =>'required',
                'description' =>'required',
                'email' => ['required', 'email'],
                'tags' => ['required','string'],
                
            ]);
            $formFields['website'] = "";
        }
        else{

            $formFields = $request->validate([
                'title' => 'required',
                'company_name' => 'required',
                'location' =>'required',
                'description' =>'required',
                'email' => ['required', 'email'],
                'tags' => ['required','string'],
                'website' => 'URL',
                
            ]);}

        if ($request->hasFile('logo')){
            $formFields['logo'] = $request->file('logo')->store('logos', 'public');
        }
        $listing->update($formFields);

        Session::flash('message', 'Successfully Updated Listing!');

        return back();
    }


    //Store listing data from form
    public function store(Request $request){
        //dd($request->file('logo'));

        if ($request["website"] == ""){

            $formFields = $request->validate([
                'title' => 'required',
                'company_name' => 'required',
                'location' =>'required',
                'description' =>'required',
                'email' => ['required', 'email'],
                'tags' => ['required','string'],
                
            ]);
            $formFields['website'] = "";
        }
        else{

            $formFields = $request->validate([
                'title' => 'required',
                'company_name' => 'required',
                'location' =>'required',
                'description' =>'required',
                'email' => ['required', 'email'],
                'tags' => ['required','string'],
                'website' => 'URL',
                
            ]);} 

        if ($request->hasFile('logo')){
            $formFields['logo'] = $request->file('logo')->store('logos', 'public');
        }

        $formFields['user_id'] = auth()->id();


        Listing::create($formFields);

        Session::flash('message', 'Successfully Created Listing :)');

        return redirect('/');
    }
}
