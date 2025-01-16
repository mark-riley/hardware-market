<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use App\Models\Media;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ListingController extends Controller
{
    //
    function getListings(){
        // $data = Listing::paginate(10);
        // return view('listings', compact('data'));

        $data = Listing::paginate(10);

        $images = array();
        foreach ($data as $listing) {
            $images[] =  Media::where('listingID', $listing->id)->get()->all();
        }

        // $images = Media::get()->all();

        return view('listings', compact('data', 'images'));
    }

    function addListing(Request $request){
        $user = Auth::user();
    
        $listing = new Listing;
        $listing->listingName = $request->listingName;
        $listing->listingPrice = $request->listingPrice;
        $listing->listingComponent = $request->listingComponent;
        $listing->listingModel = $request->listingModel;
        $listing->listingQuality = $request->listingQuality;
        $listing->listingDescription= $request->listingDescription;
        // Used for manual entry of user name and user ID
        // $listing->userName = $request->userName;
        // $listing->userID = $request->userID;
        $listing->userName = $user->name;
        $listing->userID = $user->id;
        $listing->save();
        
        $newly_created_listing_id = DB::table('listings')->orderBy('created_at', 'desc')->first();
        
        $i = 0;
        $files = [];
        if($request->file('file')){
            foreach($request->file('file') as $key => $file){
                $i = $i + 1;
                $fileName = time() . $i . '.' . $file->extension();
                $file->move(public_path('images'), $fileName);
                $files[]['name'] = $fileName;


                $media = new Media;
                $media->listingID = $newly_created_listing_id->id;
                $media->filepath = $fileName;

                $media->save();
            }
        }
        return redirect('/my-listings');
    }

    function indexListing($listing){
        $info = Listing::where('id', $listing)->get();
        $images = Media::where('listingID', $listing)->get()->all();
        return view('view-listing', compact('info', 'images'));
    }

    function indexEditListing($listing){
        $info = Listing::where('id', $listing)->get();
        return view('edit-listing', compact('info'));
    }

    function editListing(Request $request){
        $user = Auth::user();
        $listing = Listing::find($request->id);

        if($user->id == $listing->userID){
            $listing->listingName = $request->listingName;
            $listing->listingPrice = $request->listingPrice;
            $listing->listingComponent = $request->listingComponent;
            $listing->listingModel = $request->listingModel;
            $listing->listingQuality = $request->listingQuality;
            $listing->listingDescription= $request->listingDescription;
            // Needed for manual entry of user ID and name
            // $listing->userName = $request->userName;
            // $listing->userID = $request->userID;
            $listing->userName = $user->name;
            $listing->userID = $user->id;
            $listing->save();

            return redirect('/my-listings');
        }
        else{
            return back();
        }
        
    }

    function deleteListing($listing){
        $user = Auth::user();
        $data = Listing::find($listing);

        if($user->id == $data->userID){
            $data->delete();
            return redirect('/my-listings');
        }
        else{
            // return redirect('/listings');
            return back();
        }
    }
    function getMyListings(){
        $data = Listing::where('userID', Auth::id())->paginate(10);
        $images = [];
        foreach($data as $listing){
            if ($listing->userID == Auth::id()){
                $images = $images + Media::get()->all();
            }
        }

        return view('my-listings', compact('data', 'images'));
    }
    function purchase($listing){
        $purchase = Listing::where('id', $listing)->get();
        $images = Media::where('listingID', $listing)->get()->all();
        return view('purchased', compact('purchase', 'images'));
    }
}
