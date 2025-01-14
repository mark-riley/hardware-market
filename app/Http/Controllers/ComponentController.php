<?php

namespace App\Http\Controllers;

use App\Models\Component;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ComponentController extends Controller
{
    function addComponent(Request $request){
        $component = new Component;
        $component->componentType = $request->componentType;
        $component->componentName = $request->componentName;
        $component->save();
        
        return redirect('/admin');
    }

    function getComponents(){
        // $data = Listing::paginate(10);
        // return view('listings', compact('data'));

        $data = Component::get()->all();
        return view('create-listing', compact('data'));
    }
}
