<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProjectsImages;

class projectsImagesController extends Controller
{
    public function create($project_id, Request $request) {
        if($request->hasfile('files')) {
            foreach($request->file('files') as $key => $file) {
                $path = $file->store('public/projectsImages');
                $name = $file->getClientOriginalName();

                $images = new ProjectsImages();

                $images -> project_id     = $project_id;
                $images -> filename       = $path;

                $images -> save();
            }
        }
    }
}
