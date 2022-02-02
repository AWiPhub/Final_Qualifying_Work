<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\attractionsimages;

class attractionsImagesController extends Controller
{
    public function create($attraction_id, Request $request) {
        if($request->hasfile('images')) {
            foreach($request->file('images') as $key => $file) {
                $path = $file->store('public/attractionsImages');
                $name = $file->getClientOriginalName();

                $images = new attractionsimages();

                $images -> attraction_id  = $attraction_id;
                $images -> filename       = $path;

                $images -> save();
            }
        }
    }
}
